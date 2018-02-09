import {
    USER_LOGIN_ERR,
    USER_LOGIN_START,
    USER_LOGIN_SUCCESS
} from '../actions/userlogin.js';

const initialState = {
    loading: false,
    error: null,
    success: false,
    message: '',
    result: []
};

export default function UserLoginReducer(state = initialState, action) {
    switch(action.type) {
        case USER_LOGIN_START:
            return { ...state, loading: true };
        case USER_LOGIN_ERR:
            return { ...state, loading: false, error: true, message: action.message };
        case USER_LOGIN_SUCCESS:
            return { ...state, loading: false, success: true, result: action.payload };

        default: 
            return state;
    }
};

