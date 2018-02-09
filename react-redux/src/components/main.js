import React from 'react';
import logo from '../logo.svg';
import {Link} from 'react-router-dom';
const Main = (props) =>{
 return (
	 <div className="container"> 
	   <div className="logo">
	     <Link to='/'><img src={logo} alt="logo" /></Link>
	   </div>
	  </div>     
  );
}
export default Main;