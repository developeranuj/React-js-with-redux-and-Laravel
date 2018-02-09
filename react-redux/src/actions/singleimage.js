import axios from 'axios';

export const SINGLE_IMAGE_START = 'SINGLE_IMAGE_START';
export const SINGLE_IMAGE_ERR =   'SINGLE_IMAGE_ERR';
export const SINGLE_IMAGE_SUCCESS = 'SINGLE_IMAGE_SUCCESS';



function single_image_start() {
	return {
		type: SINGLE_IMAGE_START
	};
};

function single_image_error(payload) {
	return {
		type: SINGLE_IMAGE_ERR,
		message: payload
	};
};

function single_image_success(res) {
	return {
		type: SINGLE_IMAGE_SUCCESS,
		payload: res
	};
};


export function SingleImageReq(id) { 

	//var p=JSON.parse(params);

    //console.log(id);


	return (dispatch, state) => {
		
		dispatch(single_image_start());
				return axios.get('http://localhost/blog/public/api/singleimage/'+id,{ 
                
                mode: 'cors',
                body: JSON.stringify()
				})
			.then(res => {
				if (res) {
					return dispatch(single_image_success(res));
				} else {
					
					return dispatch(single_image_error(res));
				}
			})

			.catch(error => dispatch(single_image_error(error)));
	};
};