import logo from "./logo.svg";
import "./App.css";

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Edit <code>src/App.js</code> and save to reload. 여기도 반영
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          polaris
        </a>

        <button className="my-button"> button click1 </button>
        <button className="my-button"> button click2 </button>
        <button className="my-button"> button click3 </button>
      </header>
    </div>
  );
}

export default App;
