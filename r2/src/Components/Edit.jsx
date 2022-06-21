import { useContext, useState, useEffect } from "react";
import DataContext from "./DataContext";

function Edit() {

    const { modalAnimal, setModalAnimal, setEditAnimal } = useContext(DataContext);

    const [vardas, setVardas] = useState('');
    const [pavarde, setPavarde] = useState('');
    const [sasknr, setSasknr] = useState('');
    const [balansas, setBalansas] = useState('');

    const close = () => {
        setModalAnimal(null);
    }

    useEffect(() => {
        if (null === modalAnimal) return;
        setVardas(modalAnimal.vardas);
        setPavarde(modalAnimal.pavarde);
        setSasknr(modalAnimal.sasknr);
        setBalansas(modalAnimal.balansas);
    }, [modalAnimal])

    const edit = () => {
        setEditAnimal({vardas, pavarde, sasknr, balansas, id:modalAnimal.id});
        setModalAnimal(null);
    }

    if (null === modalAnimal) { 
        return null;
    }

    return (
        <div className="modal">
            <div className="modal-dialog modal-dialog-centered">
                <div className="modal-content">
                    <div className="modal-header">
                        <h2 className="modal-title">Edit</h2>
                        <button type="button" className="close" onClick={close}>
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div className="modal-body">
                        <div className="card mt-4">
                        <div className="card-body">
                    <div className="form-group">
                        <label>Vardas</label>
                        <input type="text" className="form-control" value={vardas} onChange={e => setVardas(e.target.value)}/>
                        <small className="form-text text-muted">Koreguoti varda</small>
                    </div>
                    <div className="form-group">
                        <label>Pavarde</label>
                        <input type="text" className="form-control" value={pavarde} onChange={e => setPavarde(e.target.value)}/>
                        <small className="form-text text-muted">Koreguoti pavarde</small>
                    </div>
                    <div className="form-group">
                        <label>sask. nr</label>
                        <input type="text" className="form-control" value={sasknr} onChange={e => setSasknr(e.target.value)}/>
                        <small className="form-text text-muted"></small>
                    </div>
                    <div className="form-group">
                        <label>Balansas</label>
                        <input type="text" className="form-control" value={balansas} onChange={e => setBalansas(e.target.value)}/>
                        <small className="form-text text-muted">How much is the fish (Scooter).</small>
                    </div>
                    
                            </div>
                        </div>
                    </div>
                    <div className="modal-footer">
                        <button type="button" className="btn btn-outline-success" onClick={edit}>Save changes</button>
                        <button type="button" className="btn btn-outline-secondary" onClick={close}>Close</button>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Edit;