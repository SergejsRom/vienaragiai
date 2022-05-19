import './App.css';

function App() {

    const stebuklas = () => {
        console.log('stebuklu stebuklas');
    }

    return (
        <div className="App">
            <header className="App-header">
                <h1>State</h1>


                <button onClick={stebuklas}>Press Me!</button>
            </header>
        </div>
    );
}

export default App;
