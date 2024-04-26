<template>
    <div>
        <form class="flex flex-col gap-4" @submit.prevent="saveData()">
            <div>
                <InputComp
                    labelName="File (CSV)"
                    id="file"
                    placeholder="Masukan nama"
                    ref="myFile"
                    name="file"
                    type="file"
                    required
                    @change="handleFileUpload($event)"
                    accept=".csv"
                />
            </div>

            <div
                v-if="isLoading"
                class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700"
            >
                <div
                    class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                    :style="{ width: progressBar + '%' }"
                >
                    {{ progressBar }}%
                </div>
            </div>

            <div>
                <button type="submit" class="btn-success">Import</button>
            </div>
        </form>
    </div>
</template>

<script setup>
import api from "../src/api";
import InputComp from "./InputComp.vue";

import Swal from "sweetalert2";
</script>

<script>
export default {
    data() {
        return { progressBar: 0, file: "", isLoading: false };
    },
    methods: {
        handleFileUpload(event) {
            this.file = event.target.files[0];
        },
        async saveData() {
            this.isLoading = true;

            let formData = new FormData();

            formData.append("file", this.file);
            await api
                .post("/api/employee/import/csv", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                    onUploadProgress: (progressEvent) => {
                        let total =
                            (progressEvent.loaded * 100) / progressEvent.total;

                        this.progressBar = parseInt(Math.round(total));
                    },
                })
                .then((e) => {
                    this.isLoading = false;
                    this.progressBar = 0;
                    this.reset();

                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil import karyawan",
                        icon: "success",
                    }).then((e) => {
                        window.location.href = "/home";
                    });
                });
        },
        reset() {
            document.getElementById("file").value = null;
        },
    },
};
</script>
