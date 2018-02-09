export const selectUser= (user) => {
  console.log('Your Are Clicked On :', user.name);

  return{
  	type: "USER_SELECTED",
  	payload: user
  }
}; 
