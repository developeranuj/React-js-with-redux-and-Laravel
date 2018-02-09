import axios from 'axios';

export const LIKE_REQ_START = 'Like_REQ_START';
export const LIKE_REQ_ERR =   'Like_REQ_ERR';
export const LIKE_REQUEST_SUCCESS = 'Like_REQUEST_SUCCESS';



function like_req_start() {
	return {
		type: LIKE_REQ_START 
	};
};

function like_req_error(payload) {
	return {
		type: LIKE_REQ_ERR,
		message: payload
	};
};

function like_req_success(res) {
	return {
		type: LIKE_REQUEST_SUCCESS,
		payload: res
	};
};


export function dolikeReq(id,userid,callback) {
     
    //var p=JSON.parse(id);
 
	return (dispatch, state) => {
		
		dispatch(like_req_start());
				return axios.post('http://localhost/blog/public/api/gallery/newlike',{ 
                data: [id,userid],
                body: JSON.stringify()
				})
			.then(res => {
				if (res) {
if (callback)
{
	callback();
}
					return dispatch(like_req_success(res));
				} else {
					
					return dispatch(like_req_error(res));
				}
			})

			.catch(error => dispatch(like_req_error(error)));
	};
};