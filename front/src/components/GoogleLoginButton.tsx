import axios from "axios";

export const GoogleLoginButton = () => {
    const onClick = () => {
        axios.get("/api/login/google").then((res) => {
            window.location.href = res.data.redirect_url;
        });
    };
    return (
        <button onClick={onClick}>google login</button>
    );
};
