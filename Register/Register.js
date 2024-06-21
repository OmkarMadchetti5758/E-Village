// function show()
// {
//     var pass = document.getElementById("pass");
//     var cpass = document.getElementById("cpass");
//     if(pass.type === "password" || cpass.type === "password")
//     {
//         pass.type = "text";
//         cpass.type = "text";
//     }
//     else{
//         pass.type = "password";
//         cpass.type = "password";
//     }
// }

// function validator()
// {
//     var uname = document.getElementById('uname');
//     var pass = document.getElementById('pass');
//     var cpass = document.getElementById('cpass');

//     if(isAlphabet(uname,"Enter Username"))
//     {
//         if(isAlphaNumeric(pass,6,8,"Enter Password"))
//         {
//             if(isAlphaNumericC(pass,6,8,"Enter Confirm Password"))
//             {
//                 alert(uname.value);
//                 return true;
//             }
//         }
//     }
// }

// function isEmpty()
// {
//     if(uname.length==0)
//     {
//         alert("Enter Username");
//         if(pass.length==0)
//         {
//             alert("Enter Password");
//         }
//     }
// }

// function isAlphabet(uname,msg)
// {
//     const name = /^[a-zA-Z]+$/;
//     isEmpty();
//     if(uname.value.match(name))
//     {
//         return true;
//     }
//     else{
//         alert(msg);
//         uname.focus();
//         return false;
//     }
// }

// function isAlphaNumeric(pass,min,max,msg)
// {
//     const password = /^[a-zA-Z0-9]+$/;
//     isEmpty();
//     if(pass.value.match(password))
//     {
//         if(pass.length>=min && pass.length<=max)
//         {
//             return true;
//         }
//     }
//     else{
//         alert(msg);
//         pass.focus();
//         return false;
//     }
// }

// function isAlphaNumericC(cpass,min,max,msg)
// {
//     const password = /^[a-zA-Z0-9]+$/;
//     isEmpty();
//     if(cpass.value.match(password))
//     {
//         if(cpass.length>=min && cpass.length<=max)
//         {
//             return true;
//         }
//     }
//     else{
//         alert(msg);
//         cpass.focus();
//         return false;
//     }
// }