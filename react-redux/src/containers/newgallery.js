import React, { Component } from 'react';
import {bindActionCreators} from 'redux';
import {connect} from 'react-redux';
import {dofetchuserReq} from '../actions/fetchusers';
import {dolikeReq} from '../actions/likeincrements';
import { Button,Modal, ButtonToolbar, Overlay, Popover } from 'react-bootstrap';
import LoginForm from './loginform';
import SignUpForm from './signupform';
import {BrowserRouter as Router, Route, Link} from 'react-router-dom';




class NewGallery extends Component {
  constructor(props) {

      super(props);
      
      this.state={show : false, loggedin: ' ', signup: false};  

   }
  
 componentWillMount(props) { 

   this.props.fetchallusers();

 }

 clickHandle(id){
   var userid = sessionStorage.getItem("userid");
   var self=this;
   this.props.increment(id, userid,()=>{self.props.fetchallusers();});

}

handleShowForm(){
  this.setState({ show: true});
}

onhandleSubmit(val){
  this.setState({ signup: val});
  setTimeout(function() { this.setState({show: val}); }.bind(this), 3000);
  console.log(this.state.signup);
}

  render() {


   var self= this; 
   var form;
   
   let close = () => this.setState({ show: false});
    
     if(this.state.form == false){
      form = (<LoginForm callbackfromparent={self.onhandleSubmit.bind(self)}/>);
     }
     else{

         form = (<LoginForm callbackfromparent={self.onhandleSubmit.bind(self)}/>);
     }
    
  

    var result = this.props.allusers.result.map(function(user,index){

      //check user is logged in or not
 
      if(sessionStorage.getItem("email") == null){

        var heart = (<i onClick={() => self.handleShowForm()} className="fa fa-heart" aria-hidden="true"></i>);

        var comments = (<i onClick={() => self.handleShowForm()} className="fa fa-comment" aria-hidden="true"></i>);
        
      }
      else{
         
         var heart = (<i onClick={() => self.clickHandle(user.id)} className="fa fa-heart" aria-hidden="true"></i>);
         var comments = (<Link to={`/view/${user.id}`} ><i className="fa fa-comment" aria-hidden="true"></i></Link>);
      }
      

      // Count Likes
        var total_likes = user.likes.length;
        
      
       
        
        
      return (

      <div className="col-md-3" key={index}>
          <img src={user.images} alt="" />
         
          <div className="meta">
          <span>
             {total_likes}
             {heart}
          </span>
          <span className="comment" >
            {comments}
          </span>

          </div>     

       </div>
      );

     }) 

    return (
         <div className="container">
           <div className="row">
              {result}

          <Modal
              show={this.state.show}
              onHide={close}
              container={this}
              aria-labelledby="contained-modal-title"
              backdrop="static"
          >
          <Modal.Header closeButton>
            <Modal.Title id="contained-modal-title">Please Login To Like And Comment</Modal.Title>
          </Modal.Header>
          <Modal.Body>
           
            {form}
           
          </Modal.Body>
          
        </Modal>


           </div>
         </div> 

    );
  }
}

function mapStateToProps(state){
  return {
    allusers: state.fetchusers,
    incrementlikes: state.likeincrement
  };
}
function mapDispatchToProps(dispatch) {
 return {
   fetchallusers: () => {
     dispatch(dofetchuserReq());
   },
   increment:(id,userid,callback)=>{
    dispatch(dolikeReq(id,userid,callback));
   }

 };
}
export default connect(mapStateToProps, mapDispatchToProps)(NewGallery);