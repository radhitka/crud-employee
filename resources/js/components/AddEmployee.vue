<template>
    <div>
        <form class="flex flex-col gap-4" @submit.prevent="saveData()">
            <div class="grid gap-4 md:grid-cols-2">
                <InputComp
                    labelName="Nama"
                    id="nama"
                    placeholder="Masukan nama"
                    name="nama"
                    v-model:valueInput="nama"
                    :value="nama"
                    required
                />
                <InputComp
                    labelName="Nomor"
                    id="nomor"
                    placeholder="Masukan Nomor"
                    type="number"
                    min="1"
                    name="nomor"
                    v-model:valueInput="nomor"
                    :value="nomor"
                    required
                />
                <InputComp
                    labelName="Jabatan"
                    id="jabatan"
                    placeholder="Contoh: Backend Developer"
                    name="jabatan"
                    v-model:valueInput="jabatan"
                    :value="jabatan"
                    required
                />
                <InputComp
                    labelName="Departemen"
                    id="departemen"
                    placeholder="Contoh: Tech"
                    name="departemen"
                    v-model:valueInput="departemen"
                    :value="departemen"
                    required
                />
                <InputComp
                    labelName="Tanggal Masuk"
                    id="date"
                    placeholder="Contoh: Tech"
                    type="date"
                    name="tanggal_masuk"
                    v-model:valueInput="tanggal_masuk"
                    :value="tanggal_masuk"
                    required
                />
                <InputComp
                    labelName="Foto"
                    id="foto"
                    placeholder="Contoh: 'https://i.pravatar.cc/150'"
                    name="foto"
                    v-model:valueInput="foto"
                    :value="foto"
                    required
                />
            </div>
            <div>
                <label
                    for="status"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Status</label
                >
                <select
                    id="status"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    v-model="inputStatus"
                    required
                >
                    <option selected value="">Pilih Status</option>
                    <option
                        v-for="(data, index) in status"
                        :key="index"
                        :value="data"
                    >
                        {{ data }}
                    </option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn-success">Submit</button>
            </div>
        </form>
    </div>
</template>

<script setup>
import InputComp from "./InputComp.vue";

import Swal from "sweetalert2";
import api from "../src/api";
</script>

<script>
export default {
    data() {
        return {
            nama: "",
            nomor: "",
            jabatan: "",
            departemen: "",
            tanggal_masuk: "",
            foto: "",
            inputStatus: "",
            status: ["kontrak", "probration", "tetap"],
        };
    },

    methods: {
        async saveData() {
            let formData = new FormData();

            //assign state value to formData
            formData.append("nama", this.nama);
            formData.append("nomor", this.nomor);
            formData.append("jabatan", this.jabatan);
            formData.append("departemen", this.departemen);
            formData.append("tanggal_masuk", this.tanggal_masuk);
            formData.append("foto", this.foto);
            formData.append("status", this.inputStatus);

            api.post("/api/employee", formData)
                .then((e) => {
                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil tambah karyawan",
                        icon: "success",
                    }).then((e) => {
                        window.location.href = "home";
                    });
                })
                .catch((err) => {
                    Swal.fire({
                        icon: "error",
                        title: "Ada Error",
                        text: err.response.data,
                    });
                });
        },
    },
};
</script>
