import React from "react";
import logo from "./logo.svg";
import "./App.css";
import { ExampleComponent } from "./components/ExampleComponent";
import { GoogleLoginButton } from "./components/GoogleLoginButton";

function App() {
    return (
        <div className="App">
            <header className="App-header">
                <GoogleLoginButton />
                <ExampleComponent />
                <img src={logo} className="App-logo" alt="logo" />
                <p>
                    Edit <code>src/App.tsx</code> and save to reload.
                </p>
                <a
                    className="App-link"
                    href="https://reactjs.org"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Learn React
                </a>
            </header>
        </div>
    );
}

export default App;
