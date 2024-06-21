function show()
{
    var pass = document.getElementById("pass");
    if(pass.type === "password")
    {
        pass.type = "text";
    }
    else{
        pass.type = "password";
    }
}

function validator()
{
    var uname = document.getElementById('uname');
    var pass = document.getElementById('pass');

    if(isAlphabet(uname,"Enter Username"))
    {
        if(isAlphaNumeric(pass,6,8,"Enter Password"))
        {
            document.write(uname.value);
            return true;
        }
    }
}

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


// function lengthRestriction(uname,min,max)
// {
//     var input = uname.value;
//     if(input.length >=min && input.length<=max)
//     {
//         return true;
//     }
//     else{
//         alert("UserName length must be 6-8 char");
//         uname.focus();
//         return false;
//     }
// }

// function password(pass,min,max)
// {
//     var passinput = /^[\w\-\.\+]+@[a-zA-Z0-9\.\-]$/;

//     if(pass.value.match(passinput))
//     {
//         return true;
//     }
//     else{
//         alert("Enter valid Password");
//         pass.focus();
//         return false;
//     }
// }