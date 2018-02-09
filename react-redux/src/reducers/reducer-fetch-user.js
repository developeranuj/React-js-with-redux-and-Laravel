import {
    USER_REQ_ERR,
    USER_REQ_START,
    USER_REQUEST_SUCCESS
} from '../actions/fetchusers.js';

const initialState = {
    loading: false,
    error: null,
    success: false,
    message: '',
    result: []
};

export default function fectUserReducer(state = initialState, action) {
    switch(action.type) {
        case USER_REQ_START:
            return { ...state, loading: true };
        case USER_REQ_ERR:
            return { ...state, loading: false, error: true, message: action.message };
        case USER_REQUEST_SUCCESS:
            return { ...state, loading: false, success: true, result: action.payload };

        default:
            return state;
    }
};

