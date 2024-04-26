<template>
    <div class="relative overflow-x-auto border border-slate-500 rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs !text-white uppercase bg-gray-600">
                <tr>
                    <th scope="col" class="font-bold">No</th>
                    <th scope="col" class="">Aksi</th>
                    <th scope="col" class="">Nama</th>
                    <th scope="col" class="">Nomor</th>
                    <th scope="col" class="">Jabatan</th>
                    <th scope="col" class="">Departement</th>
                    <th scope="col" class="">Tanggal Masuk</th>
                    <th scope="col" class="">Foto</th>
                    <th scope="col" class="">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    class="bg-white border-b"
                    v-for="(item, key) in employee"
                    :key="key"
                >
                    <td class="">
                        {{ key + 1 }}
                    </td>
                    <td>
                        <div class="flex flex-wrap gap-1">
                            <a class="btn-primary" :href="'edit/' + item.id">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <button
                                class="btn-danger"
                                @click.prevent="
                                    deleteEmployeeConfirm(key, item.id)
                                "
                            >
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    </td>
                    <td scope="row" class="">
                        {{ item.nama }}
                    </td>
                    <td class="">{{ item.nomor }}</td>
                    <td class="">{{ item.jabatan }}</td>
                    <td class="">{{ item.departmen }}</td>
                    <td class="">{{ item.tanggal_masuk }}</td>
                    <td class="">
                        <img :src="item.foto" class="w-32 rounded-lg" alt="" />
                    </td>
                    <td class="">{{ item.status }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
import Swal from "sweetalert2";
import api from "../src/api";
</script>

<script>
export default {
    data() {
        return {
            employee: [],
        };
    },
    methods: {
        async getEmployee() {
            await api.get("/api/employee").then((e) => {
                this.employee = e.data.data;
            });
        },
        deleteEmployeeConfirm(index, id) {
            Swal.fire({
                title: "ingin Menghapus Data?",
                text: "data akan hilang permanent",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus",
                cancelButtonText: "tidak",
            }).then((result) => {
                if (result.isConfirmed) {
                    this.deleteEmployee(index, id);
                }
            });
            // await api.get("/api/employee").then((e) => {
            //     this.employee = e.data.data;
            // });
        },

        async deleteEmployee(index, id) {
            await api.delete(`/api/employee/${id}`).then((e) => {
                this.employee.splice(index, 1);

                Swal.fire({
                    title: "Sukses",
                    text: "Berhasil Hapus karyawan",
                    icon: "success",
                });
            });
        },
    },
    mounted() {
        this.getEmployee();
    },
};
</script>
