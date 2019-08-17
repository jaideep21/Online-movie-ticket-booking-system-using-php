
function validate()
{
  var cname=document.reg.cp.value;

  if(cname=="")
  {
    window.alert("Enter candidate name");
    document.reg.cp.focus();
    return false;
  }

   var cno=document.reg.cno.value;

  if(cno=="")
  {
    window.alert("Enter contact no.");
    document.reg.cno.focus();
    return false;
  }
 else if(isNaN(cno) || cno.indexOf(" ")!=-1)
  {
     window.alert("Contact no. should be numeric");
    document.reg.cno.focus();
    return false;
  }
 else if(cno.length!=10)
  {
     window.alert("Contact no. should be 10 digit");
    document.reg.cno.focus();
    return false;
  }


     var em=document.reg.email.value;

  if(em=="")
  {
    window.alert("Enter email id .");
    document.reg.email.focus();
    return false;
  }
   else
  {
    if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(reg.email.value))
{

}
else
{
alert("Invalid E-mail Address! Please re-enter");
return false;
}
}


  


}