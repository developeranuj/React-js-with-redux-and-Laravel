import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import Navigation from "./header";
import Home from "./home";
import About from "./about";
import { BrowserRouter as Router, Route, Link, Redirect} from 'react-router-dom'


class App extends Component {
  constructor(props) {
      super(props);     
   };

  setNewNumber() {
     
   }
   
  render() {
    return (
      <div className="App">
        <Router>
           <switch>
              <Navigation/>
              <Route exact path="/" component={Home}/>
              <Route  path="/about" component={About}/>
            </switch>  
        </Router>       
        
      </div>
    );
  }
}

export default App;
