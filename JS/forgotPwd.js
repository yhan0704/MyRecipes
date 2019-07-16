"use strict";

window.onload=pageLoad;
function pageLoad(){
	document.getElementById("submit").onclick=chkNameAndPhone;
}

function chkNameAndPhone() {
  
  //current pwd
  var myid = document.getElementById("currPW").value;


	var pattern1 = /^\w+$/;
	var result = pattern1.test(myid);
	

	if (result==false) 
	{
		alert("please do not empty your current password. length: min8 ~ max18");
	document.getElementById("currPW").select();
    
		return false;
    }
    
    
//new pwd
  var myid = document.getElementById("newPW").value;


  var pattern1 = /^\w+$/;
  var result = pattern1.test(myid);
  

  if (result==false) 
  {
      alert("please do not empty your new password. length: min8 ~ max18");
  document.getElementById("newPW").select();
  
      return false;
  }
 
 //confirm password
  var init_value = document.getElementById("newPW").value;
  var sec_value = document.getElementById("confPW").value;

  if (init_value != sec_value) {
    alert("The two newPW you entered are not the same. Please re-enter both now");
    document.getElementById("newPW").focus();
    document.getElementById("newPW").select();
    return false;
  }
   
}	