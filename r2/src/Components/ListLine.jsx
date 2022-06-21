import { useContext } from "react";
import DataContext from "./DataContext";

function ListLine({ klientas }) {

    const {setDeleteAnimal, setModalAnimal} = useContext(DataContext);

    const remove = () => {
        setDeleteAnimal(klientas);
    }

    const edit = () => {
        setModalAnimal(klientas);
    }

    return (
        <li className="list-group-item">
            <div className="one-animal">
                <div className="one-animal__content">
                    <b>{klientas.vardas} </b>
                    <span>{klientas.pavarde}</span>
                    <span>{klientas.sasknr}</span>
                    <span>{klientas.balansas}</span>
                </div>

                <div className="one-animal__buttons">
                    <button type="button" className="btn btn-outline-success mr-3" onClick={edit}>Edit</button>
                    <button type="button" className="btn btn-outline-danger" onClick={remove}>Delete</button>
                </div>
            </div>

        </li>
    );
}

export default ListLine;