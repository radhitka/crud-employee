import "./bootstrap";

import { createApp } from "vue";
import AddEmployee from "./components/AddEmployee.vue";
import EditEmployee from "./components/EditEmployee.vue";
import ImportCsv from "./components/ImportCsv.vue";
import IncrementCounter from "./components/IncrementCounter.vue";
import ListEmployee from "./components/ListEmployee.vue";

const app = createApp({
    components: {
        IncrementCounter,
        ListEmployee,
        AddEmployee,
        EditEmployee,
        ImportCsv,
    },
});

app.mount("#app");
