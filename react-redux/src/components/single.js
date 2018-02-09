import React, { Component } from 'react';
//import {bindActionCreators} from 'redux';
import {connect} from 'react-redux';
import {SingleImageReq} from '../actions/singleimage';
import {SubmitCommentReq} from '../actions/submitcomments';
import {docommentsReq} from '../actions/getcomments';
//import Count from 'react-count';


class Single extends Component {
  constructor(props) {
      super(props);
        this.state={
          id :this.props.match.params.postid,
          userid: sessionStorage.getItem("userid"),
          comment: ''
        };

      
   } 
   
componentWillMount() {
   this.props.fetchsingleimage(this.state.id);
   this.props.getcomments(this.state.id);
 }

 handleOnChange(e){
 this.setState({ comment: e.target.value });
  //console.log(this.state.comment);
 }
 
 handleSubmitComments(){
     var id = this.state.id;  
     var self=this;
    this.props.submitcomments(this.state.userid, this.state.comment, this.state.id, ()=>{self.props.fetchsingleimage(id);});
 } 

  render() {
      
      var self = this;
      
       //console.log(this.props.getcomment);

      if(this.props.getcomment.result){
        var allcomments = this.props.getcomment.result.map(function(image,index){
            
            return(
                <div className="allcomments" key={index}>
                    <span >Author Id:- {image.userid} </span>
                    <p>Comment:- {image.comments}</p>
                </div>  
            );   

        });
      }
        











      if(this.props.singleimage.result.data){
        var result = this.props.singleimage.result.data.map(function(data,index){
         
          
            var total_likes = data.likes.length;
         

          var comments = data.comments.length;  

    return( 
          <div className="row" key={index}>  
            <div className="col-md-6">
                 <div className="single" >
                     <img  src={data.images} />

                      {allcomments}   

                 </div>
              </div>
              <div className="col-md-6">
                 <div className="side-menu-container">
                    <ul className="nav navbar-nav">

                        <li><a href="#"><span className="glyphicon glyphicon-heart"></span> {total_likes}</a></li>

                        <li className="active"><a href="#"><span className="glyphicon glyphicon-eye-open"></span>

                           </a>
                         </li>
                        <li><a href="#"><span className="glyphicon glyphicon-comment"></span> Comments {comments}</a></li>

                    </ul>   
                    <form>
                        <div className="form-group">
                          <label>Comment Here</label>
                          <textarea onChange={self.handleOnChange.bind(self)} value={self.state.comment} name="comment" required></textarea>
                        </div>
                        <button onClick={self.handleSubmitComments.bind(self)}type="button" className="btn btn-default">Comment</button>
                  </form> 
              </div>
           </div>
        </div>  
        );

        });
       
      }


    return (
         <div className="container">
           
              {result}
           
      </div>
    );
  }
}


function mapStateToProps(state){
  return {
    singleimage: state.singleimage,
    submitcomment: state.submitcomment,
    getcomment: state.getcomments
  };
}
function mapDispatchToProps(dispatch) {
 return {
   fetchsingleimage: (id) => {
     dispatch(SingleImageReq(id));
   },
   submitcomments: (userid, comment, imageid, callback) => {
     dispatch(SubmitCommentReq(userid, comment, imageid,callback));
   },
   getcomments: (id) => {
     dispatch(docommentsReq(id));
   }

 };
}

export default connect(mapStateToProps, mapDispatchToProps)(Single);