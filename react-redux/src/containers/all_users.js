import React, { Component } from 'react';
import {bindActionCreators} from 'redux';
import {connect} from 'react-redux';
import {dofetchuserReq} from '../actions/fetchusers';
class FetchUsers extends Component {
  constructor(props) {
      super(props);    

   };
   componentWillMount(props) {
     this.props.fetchallusers();
   }

   
  render() {
    if (this.props.allusers){
     var result = this.props.allusers.result.map(function(user,index){
      return (<li key={index} ><span>{user.name}</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>{user.email}</span></li>);

     }) 
    }
        
        
        
         
    return (
         <div className="container">
           <ul>
              {result}
           </ul>
         </div> 

    );
  }
}


function mapStateToProps(state){
  return {
    allusers: state.fetchusers
  };
}
function mapDispatchToProps(dispatch) {
 return {
   fetchallusers: () => {
     dispatch(dofetchuserReq());
   }

 };
}
export default connect(mapStateToProps, mapDispatchToProps)(FetchUsers);