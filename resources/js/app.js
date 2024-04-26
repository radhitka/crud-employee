import "./bootstrap";

import { createApp } from "vue";
import AddEmployee from "./components/AddEmployee.vue";
import IncrementCounter from "./components/IncrementCounter.vue";
import ListEmployee from "./components/ListEmployee.vue";

const app = createApp({
    components: {
        IncrementCounter,
        ListEmployee,
        AddEmployee,
    },
});

app.mount("#app");
