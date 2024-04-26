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
                    <th class="">
                        {{ key }}
                    </th>
                    <th></th>
                    <th
                        scope="row"
                        class="font-medium text-gray-900 whitespace-nowrap"
                    >
                        Apple MacBook Pro 17"
                    </th>
                    <td class="">Silver</td>
                    <td class="">Laptop</td>
                    <td class="">$2999</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            employee: [{}],
        };
    },
};
</script>
