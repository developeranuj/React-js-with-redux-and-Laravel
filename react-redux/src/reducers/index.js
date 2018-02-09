import {combineReducers} from 'redux';
import userReducer from './reducer-user';
import ActiveUserReducer from './reducer-active-user'; 
import FetchUserReducer from './reducer-fetch-user';
import LikeIncrementReducer from './reducer-likeincrements';
import UserLoginReducer from './reducer-userlogin';
import SingleImages from './reducer-singleimage';
import SubmitComment from './reducer-submitcomment';
import GetComments from './reducer-getcomments';

const allReducers = combineReducers({
	users: userReducer,
	activeuser: ActiveUserReducer,
	fetchusers: FetchUserReducer,
	likeincrement: LikeIncrementReducer,
	userlogin: UserLoginReducer,
	singleimage: SingleImages,
	submitcomment: SubmitComment,
	getcomments: GetComments
});



export default allReducers; 