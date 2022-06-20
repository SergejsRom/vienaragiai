import { useEffect } from 'react';
import { useState } from 'react';
import './App.css';
import './bootstrap.css';
import Create from './Components/Create';
import DataContext from './Components/DataContext';
import List from './Components/List';
import axios from 'axios';


function App() {

  const [animals, setAnimals] = useState([]);

  const [lastUpdate, setLastUpdate] = useState(Date.now());

  const [createAnimal, setCreateAnimal] = useState(null);

  useEffect(() => {
    axios.get('http://localhost/vienaragiai/r2server/animals')
      .then(res => setAnimals(res.data));
  }, [lastUpdate]);

  useEffect(() => {
    if(null === createAnimal) return;
    axios.post('http://localhost/vienaragiai/r2server/animals', createAnimal)
      .then(_ => setLastUpdate(Date.now()));
  }, [createAnimal]);


  return (
    <DataContext.Provider value={
      {
        animals,
        setCreateAnimal
      }
    }>
      <div className="container">
        <div className="row">
          <Create />
          <List />
        </div>
      </div>
    </DataContext.Provider>
  );
}

export default App;
