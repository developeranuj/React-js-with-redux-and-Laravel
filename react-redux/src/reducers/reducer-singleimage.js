import {
    SINGLE_IMAGE_ERR,
    SINGLE_IMAGE_START,
    SINGLE_IMAGE_SUCCESS
} from '../actions/singleimage.js';

const initialState = {
    loading: false,
    error: null,
    success: false,
    message: '',
    result: []
};

export default function SingleImageReducer(state = initialState, action) {
    switch(action.type) {
        case SINGLE_IMAGE_START:
            return { ...state, loading: true };
        case SINGLE_IMAGE_ERR:
            return { ...state, loading: false, error: true, message: action.message };
        case SINGLE_IMAGE_SUCCESS:
            return { ...state, loading: false, success: true, result: action.payload };

        default:
            return state;
    }
};

