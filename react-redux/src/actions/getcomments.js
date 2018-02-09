import 'whatwg-fetch';

export const COMMENTS_REQ_START = 'COMMENTS_REQ_START';
export const COMMENTS_REQ_ERR =   'COMMENTS_REQ_ERR';
export const COMMENTS_REQUEST_SUCCESS = 'COMMENTS_REQUEST_SUCCESS';



function comment_req_start() {
	return {
		type: COMMENTS_REQ_START
	};
};

function comment_req_error(payload) {
	return {
		type: COMMENTS_REQ_ERR,
		message: payload
	};
};

function comment_req_success(res) {
	return {
		type: COMMENTS_REQUEST_SUCCESS,
		payload: res  
	};
};


export function docommentsReq(params) {

	//var p=JSON.parse(params);
	return (dispatch, state) => {
		
		dispatch(comment_req_start());
				return fetch('http://localhost/blog/public/api/gallery/getcomments/'+params, {
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

					return dispatch(comment_req_success(res));
				} else {
					
					return dispatch(comment_req_error(res));
				}
			})

			.catch(error => dispatch(comment_req_error(error)));
	};
};