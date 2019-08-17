

function validate()
{
  var uname=document.cuser.un.value;
    var pass=document.cuser.ps.value;

  if(uname=="")
  {
    window.alert("Enter username");
    document.cuser.un.focus();
    return false;
  }

    if(pass=="")
  {
    window.alert("Enter password");
    document.cuser.ps.focus();
    return false;
  }
    
    
      // alpha numeric
/*
  if(/[^a-zA-Z-0-9\-\/]/.test(cuser.ps.value))
  {
       window.alert("Password should be alpha numeric");
    document.cuser.ps.focus();
    return false;
  }
 */

        // alpha numeric with special
 /*
  if(!(/[^a-zA-Z-0-9\-\/]/.test(cuser.ps.value)))
  {
       window.alert("Password should be alpha numeric with special");
    document.cuser.ps.focus();
    return false;
  }
  
*/


      // only character

/*  if(/[^a-zA-Z\-\/]/.test(cuser.ps.value))
  {
       window.alert("Password should be only character");
    document.cuser.ps.focus();
    return false;
  }
 */
 
 
       // only numeric
  /*
  if(/[^0-9\/]/.test(cuser.ps.value))
  {
       window.alert("Password should be only numeric");
    document.cuser.ps.focus();
    return false;
  }
 */
 
      // only capital letter
 /*
  if(/[^A-Z\/]/.test(cuser.ps.value))
  {
       window.alert("Password should be only capital letter");
    document.cuser.ps.focus();
    return false;
  }

  */
  

      // only SMALL letter
 /*
  if(/[^a-z\/]/.test(cuser.ps.value))
  {
       window.alert("Password should be only SMALL letter");
    document.cuser.ps.focus();
    return false;
  }
  */
  


        // only special character

  if(/[^$#@&\/]/.test(cuser.ps.value))
  {
       window.alert("Password should be only special character");
    document.cuser.ps.focus();
    return false;
  }





}