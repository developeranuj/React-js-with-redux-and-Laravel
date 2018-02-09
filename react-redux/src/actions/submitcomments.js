import axios from 'axios';

export const SUBMITCOMMENT_START = 'SUBMITCOMMENT_START';
export const SUBMITCOMMENT_ERR =   'SUBMITCOMMENT_ERR';
export const SUBMITCOMMENT_SUCCESS = 'SUBMITCOMMENT_SUCCESS';


function submit_comment_start() {
	return {
		type: SUBMITCOMMENT_START
	};
};

function submit_comment_error(payload) {
	return {
		type: SUBMITCOMMENT_ERR,
		message: payload
	};
};

function submit_comment_success(res) {
	return {
		type: SUBMITCOMMENT_SUCCESS,
		payload: res
	};
};


export function SubmitCommentReq(userid, comment, imageid, callback) {

	//var p=JSON.parse(params);

    //console.log(userid, comment, imageid);

	return (dispatch, state) => {
		
		dispatch(submit_comment_start());
				return axios.post('http://localhost/blog/public/api/gallery/newcomments',{
				data: [userid, comment, imageid], 
                body: JSON.stringify()
				})
			.then(res => {
				if (res) {

     if (callback)
{
	callback();
}


					return dispatch(submit_comment_success(res));
				} else {
					
					return dispatch(submit_comment_error(res));
				}
			})

			.catch(error => dispatch(submit_comment_error(error)));
	};
};