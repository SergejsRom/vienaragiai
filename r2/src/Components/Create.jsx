import { useContext } from "react";
import { useState } from "react";
import DataContext from "./DataContext";

function Create() {

    const {setCreateAnimal} = useContext(DataContext);

    const [vardas, setVardas] = useState('');
    const [pavarde, setPavarde] = useState('');
    const [sasknr, setSasknr] = useState('');
    const [balansas, setBalansas] = useState(0);

    const create = () => {
        setCreateAnimal({vardas, pavarde, sasknr, balansas});
        setVardas('');
        setPavarde('');
        setSasknr('');
        setBalansas(0);

       
    }
    // let a = Math.floor(Math.random() * (100000 - 999999 + 100000) ) + 100000;
     
    

    return (
        <div className="col-5">
            <div className="card mt-4">
                <div className="card-header">
                    <h2>Create</h2>
                </div>
                <div className="card-body">
                    <div className="form-group">
                        <label>Vardas</label>
                        <input type="text" className="form-control" value={vardas} onChange={e => setVardas(e.target.value)}/>
                        <small className="form-text text-muted">Iveskite varda</small>
                    </div>
                    <div className="form-group">
                        <label>Pavarde</label>
                        <input type="text" className="form-control" value={pavarde} onChange={e => setPavarde(e.target.value)}/>
                        <small className="form-text text-muted">Iveskite pavarde</small>
                    </div>
                    <div className="form-group">
                        <label>sask. nr</label>
                        <input type="text"  className="form-control" value={sasknr} onChange={e => setSasknr(e.target.value)}/>
                        <small className="form-text text-muted">How much is the fish (Scooter).</small>
                    </div>
                    <button type="button" className="btn btn-outline-success" onClick={create}>Create</button>
                </div>
            </div>
        </div>
    );
}

export default Create;