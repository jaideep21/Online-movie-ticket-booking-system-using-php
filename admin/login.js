function validate()
{
  var uname=document.login.un.value;
   var pass=document.login.ps.value;

  if(uname=="")
  {
    window.alert("Please enter username");
    document.login.un.focus();
    return false;
  }
 
   if(pass=="")
  {
    window.alert("Please enter password");
    document.login.ps.focus();
    return false;
  }


}