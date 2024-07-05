
     function validateLogin()
            {
                var email=document.getElementById("email").value;
                var password=document.getElementById("password").value;
                if(email=="ridwan123@gmail.com"&&password==="ganteng"){
                    return true;
                }
                else{
                    alert("email atau password salah");
                    return false;
                }
            }

