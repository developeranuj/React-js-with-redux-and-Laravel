import React, { Component } from 'react';
import {douserloginReq} from '../actions/userlogin';
import {connect} from 'react-redux';

class LoginForm extends Component {
  constructor(props) {
      super(props);

      this.state={email : '', password: ''};
    
   } 

 
 handleInputChange(e){

   const name = e.target.name;
   const value = e.target.value;
   this.setState({ [name]: value,});

 }  

 handleSubmit(){
     
     this.props.userslogin(this.state.email, this.state.password);

     var val = false;
     
     this.props.callbackfromparent(val);

 }
 handleLogin(){

   var val = true;
   this.props.callbackfromparent(val);
 
 }

render() {
         console.log(this.props.userlogin.result.data);
     if(this.props.userlogin.result.data){

        sessionStorage.setItem("email",this.props.userlogin.result.data.userdata.email);
        sessionStorage.setItem("userid",this.props.userlogin.result.data.userdata.id);
      }

    
    
  return (
          <form className="form-horizontal">
            <div className="form-group">
              <label className="control-label col-sm-2" htmlFor="email">Email:</label>
              <div className="col-sm-10">
                <input type="email" name= "email" onChange={this.handleInputChange.bind(this)} className="form-control" value={this.state.email} id="email" placeholder="Enter email" />
              </div>
            </div>
            <div className="form-group">
              <label className="control-label col-sm-2" htmlFor="pwd">Password:</label>
              <div className="col-sm-10"> 
                <input type="password" name="password" onChange={this.handleInputChange.bind(this)} className="form-control" id="pwd" value={this.state.password}  placeholder="Enter password" />
              </div>
            </div>
            <div className="form-group"> 
              <div className="col-sm-offset-2 col-sm-10">
                <div className="checkbox">
                  <label><input type="checkbox" /> Remember me</label>
                </div>
              </div>
            </div>
            <div className="form-group"> 
              <div className="col-sm-offset-2 col-sm-10">
                <button type="button" className="btn btn-default" onClick={this.handleSubmit.bind(this)}>Login</button>

                 <span className="createaccount" onClick={this.handleLogin.bind(this)}>Or  Create an account</span>

              </div>
            </div> 
          </form>

        );  
    }
}

function mapStateToProps(state){
  return {
    userlogin: state.userlogin
   
  };
}
function mapDispatchToProps(dispatch) {
 return {
     userslogin: (email, password) => {
     dispatch(douserloginReq(email, password));
   },
 };
}
export default connect(mapStateToProps, mapDispatchToProps)(LoginForm);