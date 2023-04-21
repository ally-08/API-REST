import logo from './logo.svg';
import './App.css';
import { BrowserRouter, Routes , Route} from 'react-router-dom';
import MostrarProductos from './Componentes/MostrarProductos';

function App() {
  return (
    <BrowserRouter>
    <Routes>
      <Route path='/' element={<MostrarProductos></MostrarProductos>}></Route>
    </Routes>
    </BrowserRouter>
  );
}

export default App;
