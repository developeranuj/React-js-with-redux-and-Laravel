import 'whatwg-fetch';

export const USER_REQ_START = 'USER_REQ_START';
export const USER_REQ_ERR =   'USER_REQ_ERR';
export const USER_REQUEST_SUCCESS = 'USER_REQUEST_SUCCESS';



function user_req_start() {
	return {
		type: USER_REQ_START
	};
};

function user_req_error(payload) {
	return {
		type: USER_REQ_ERR,
		message: payload
	};
};

function user_req_success(res) {
	return {
		type: USER_REQUEST_SUCCESS,
		payload: res
	};
};


export function dofetchuserReq(params) {

	//var p=JSON.parse(params);
	return (dispatch, state) => {
		
		dispatch(user_req_start());
				return fetch('http://localhost/blog/public/api/gallery', {
					mode: 'cors',
					method: "get",
					headers:{'Accept':'application/json , text/plain, */*',
						     'Content-type':'application/json'
				},
					body: JSON.stringify()

				})
				.then(res => res.json())
			.then(res => {
				if (res) {

					return dispatch(user_req_success(res));
				} else {
					
					return dispatch(user_req_error(res));
				}
			})

			.catch(error => dispatch(user_req_error(error)));
	};
};