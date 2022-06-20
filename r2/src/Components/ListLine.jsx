function ListLine({animal}) {

    return (
        <li className="list-group-item"><b>{animal.animal}</b> weight:{animal.weight}kg</li>
    );
}

export default ListLine;