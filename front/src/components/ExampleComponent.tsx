import axios from "axios";
import { useState, VFC } from "react";

export const ExampleComponent: VFC = () => {
    const [message, setMessage] = useState<string>("");
    axios.get("/api/example").then((res) => {
        setMessage(res.data.message);
    });
    return <p>{message}</p>;
};
