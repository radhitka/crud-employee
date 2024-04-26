<template>
    <div>
        <div>
            <label
                :for="id"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >
                {{ labelName }}
            </label>
            <input
                type="text"
                :id="id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                v-bind="$attrs"
                @input="$emit('update:valueInput', $event.target.value)"
                :value="value"
            />
        </div>
    </div>
</template>

<script>
export default {
    props: {
        id: String | null,
        labelName: String | null,
        value: String | null,
    },
};
</script>
