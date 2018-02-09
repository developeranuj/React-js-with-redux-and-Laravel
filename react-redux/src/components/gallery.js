import React, { Component } from 'react';
import UerList from '../containers/user_list';
import ActiveUser from '../containers/active-user';
import FetchUsers from '../containers/all_users'
import NewGallery from '../containers/newgallery'

class Gallery extends Component {
  constructor(props) {
      super(props);     
   };

   
  render() {

    return (

         <div className="container">
           
            <div className="row">
             {/* <div className="col-md-6"><UerList /></div>
                           <div className="col-md-6"> <ActiveUser /></div>*/}
              
            </div>
            <div className="row gallery">
              <h3>Gallery</h3> 
                 <NewGallery />
            </div>  
         </div> 

    );
  }
}

export default Gallery; 