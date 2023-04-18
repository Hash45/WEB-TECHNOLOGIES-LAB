function f(){
    document.querySelector("h1").style.backgroundColor="blue";
  }
  function func(){
   if( document.f1.nm.value ==""){
    alert("name cannot be empty");
    document.f1.nm.focus();
    return false;
   }
   if(document.f1.edu.value ==""){
    alert("edu cannot be empty");
    document.f1.edu.focus();
    return false;
   }
   if(document.f1.pass.value  ==""){
    alert("pass cannot be empty");
    document.f1.pass.focus();
    return false;
   }
return(true);
}
function validate() {

if( document.myForm.Name.value == "" ) {
alert( "Please provide your name!" );
document.myForm.Name.focus() ;
return false;
}
if( document.myForm.EMail.value == "" ) {
alert( "Please provide your Email!" );
document.myForm.EMail.focus() ;
return false;
}
return( true );
}
//-->