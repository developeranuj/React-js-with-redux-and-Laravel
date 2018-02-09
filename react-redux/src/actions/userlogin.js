import axios from 'axios';

export const USER_LOGIN_START = 'USER_LOGIN_START';
export const USER_LOGIN_ERR =   'USER_LOGIN_ERR';
export const USER_LOGIN_SUCCESS = 'USER_LOGIN_SUCCESS';



function user_login_start() {
	return {
		type: USER_LOGIN_START
	}; 
};

function user_login_error(payload) {
	return {
		type: USER_LOGIN_ERR,
		message: payload
	};
};

function user_login_success(res) {
	return {
		type: USER_LOGIN_SUCCESS,
		payload: res
	};
};


export function douserloginReq(email, password) {

	//var p=JSON.parse(params);

    //console.log(email, password);


	return (dispatch, state) => {
		
		dispatch(user_login_start());
				return axios.post('http://localhost/blog/public/api/galleryusers',{ 
                data: email,
                mode: 'cors',
                body: JSON.stringify()
				})
			.then(res => {
				if (res) {
					return dispatch(user_login_success(res));
				} else {
					
					return dispatch(user_login_error(res));
				}
			})

			.catch(error => dispatch(user_login_error(error)));
	};
};