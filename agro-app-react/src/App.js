//Stylesheet
import './App.css';

//Components
import NavBar from './components/Navbar/NavBar';
import Content from './components/Content/Content';
import Sidebar from './components/Sidebar/Sidebar';
import Footer from './components/Footer/Footer';

function App() {
  return (
    <div className="App">
      <header>
        <h1 className="header-tittle">HTML </h1>
        <span>5</span>
      </header>
        
      <NavBar />

      <div className="container">
        <Content />
        <Sidebar />
      </div>
      
      <Footer />
    </div>
  );
}

export default App;
