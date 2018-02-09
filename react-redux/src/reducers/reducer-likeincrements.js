import {
    LIKE_REQ_ERR,
    LIKE_REQ_START,
    LIKE_REQUEST_SUCCESS
} from '../actions/likeincrements.js';


const initialState = {
    loading: false,
    error: null,
    success: false,  
    message: '',
    result: []
}; 

export default function LikeIncrementReducer(state = initialState, action) {
    switch(action.type) {
        case LIKE_REQ_START:
            return { ...state, loading: true };
        case LIKE_REQ_ERR:
            return { ...state, loading: false, error: true, message: action.message };
        case LIKE_REQUEST_SUCCESS:
        
            return { ...state, loading: false, success: true, result: action.payload };
            
        default:
            return state;
    }
};
 