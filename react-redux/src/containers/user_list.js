import React, { Component } from 'react';
import {bindActionCreators} from 'redux';
import {connect} from 'react-redux';
import {selectUser} from '../actions/index';
class UerList extends Component {
  constructor(props) {
      super(props);    

   };

   
  render() {
         
         var self=this;
         let users = this.props.users.map(function(user){

          return(
            <li key={user.id} onClick= {() => self.props.selectUser(user)}>{user.name}</li>
          );
         });
    return ( 
         <div className="container">
            <h3>Users Name</h3>
           <ul>
             {users}
           </ul>
         </div> 

    );
  }
}


function mapStateToProps(state){
  return {
    users: state.users
  };
}
function matchDispatchToProps(dispatch){
  return bindActionCreators({selectUser: selectUser}, dispatch);   
}
export default connect(mapStateToProps, matchDispatchToProps)(UerList);