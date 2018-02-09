import {
    SUBMITCOMMENT_ERR,
    SUBMITCOMMENT_START,
    SUBMITCOMMENT_SUCCESS
} from '../actions/submitcomments.js';


const initialState = {
    loading: false,
    error: null,
    success: false,  
    message: '',
    result: []
}; 

export default function SubmitCommentReducer(state = initialState, action) {
    switch(action.type) {
        case SUBMITCOMMENT_START:
            return { ...state, loading: true };
        case SUBMITCOMMENT_ERR:
            return { ...state, loading: false, error: true, message: action.message };
        case SUBMITCOMMENT_SUCCESS:
        
            return { ...state, loading: false, success: true, result: action.payload };
            
        default:
            return state;
    }
};
 