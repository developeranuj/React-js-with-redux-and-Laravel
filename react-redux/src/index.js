import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import './App.css';
import Main from "./components/main";
import Gallery from "./components/gallery";
import Single from "./components/single";
import registerServiceWorker from './registerServiceWorker';
import {BrowserRouter as Router, Route} from 'react-router-dom';



//import { createStore, applyMiddleware } from 'redux'
//import thunk from 'redux-thunk'

import allReducers from './reducers';
import {Provider} from 'react-redux';
import { applyMiddleware, createStore, compose } from 'redux';
import thunk from 'redux-thunk';
const store = createStore(allReducers,compose(
     applyMiddleware(thunk),
   ))


const router = (

	<Router>
	 
	  <div>
	  <Route path='/' component={Main}></Route>
	  <Route exact path='/' component={Gallery}></Route>
	  <Route  path='/view/:postid' component={Single}></Route> 
	 </div> 
	</Router>

 ) 


ReactDOM.render(<Provider store={store}><div>{router}</div></Provider>, document.getElementById('root'));
registerServiceWorker();
