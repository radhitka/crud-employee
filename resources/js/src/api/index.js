//import axios
import axios from "axios";

const Api = axios.create({
    //set default endpoint API
    baseURL: import.meta.env.APP_URL,
});

export default Api;
