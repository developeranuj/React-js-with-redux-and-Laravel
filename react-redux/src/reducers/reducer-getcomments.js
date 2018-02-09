import {
    COMMENTS_REQ_ERR,
    COMMENTS_REQ_START,
    COMMENTS_REQUEST_SUCCESS
} from '../actions/getcomments.js';

const initialState = {
    loading: false,
    error: null,
    success: false,
    message: '',
    result: []
};

export default function fectUserReducer(state = initialState, action) {
    switch(action.type) {
        case COMMENTS_REQ_START:
            return { ...state, loading: true };
        case COMMENTS_REQ_ERR:
            return { ...state, loading: false, error: true, message: action.message };
        case COMMENTS_REQUEST_SUCCESS:
            return { ...state, loading: false, success: true, result: action.payload };

        default:
            return state;
    }
};

