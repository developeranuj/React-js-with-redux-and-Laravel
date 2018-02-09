import React, { Component } from 'react';
import {connect} from 'react-redux';

class ActiveUser extends Component {
  constructor(props) {
      super(props);    

   };

   
  render() {
         
  
    return (
         <div className="container">
           <h3>User Detail</h3>
           <ul>
             <img src={this.props.activeuser.thumbnail} alt="user" />
             <h4>Name : {this.props.activeuser.name}</h4>
             <h4>Age : {this.props.activeuser.age}</h4>

           </ul>
         </div> 

    );
  }
}


function mapStateToProps(state){
  return {
    activeuser: state.activeuser
  };
}

export default connect(mapStateToProps)(ActiveUser);