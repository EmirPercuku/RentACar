<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contactus</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet">
     <script src="https://kit.fontawesome.com/9b33809489.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="form-box">
<h1 id="title">Sign Up</h1>
<form>
    <div class="input-group">
        <div class="input-field"id = "nameField">
            <i class="fa-solid fa-user"></i>
            <input type="text"placeholder="Name">
        </div>

        <div class="input-field">
            <i class="fa-solid fa-envelope"></i>
            <input type="email"placeholder="Email">
        </div>

        <div class="input-field">
            <i class="fa-solid fa-lock"></i>
            <input type="password"placeholder="Password">
        </div>
        <p>Forgot password ? <a href="#">Click Here!</a></p>
    </div>
    <div class="btn-field">
        <button type="button"id ="signupBtn">Sing up</button>
        <button type="button"id="singinBtn" class="disable">Sing in</button>
    </div>
</form>
</div>
</div>
<script>
    let signupBtn = document.getElementById("signupBtn");
    let signinBtn = document.getElementById("singinBtn"); 
    let nameField = document.getElementById("nameField");
    let title = document.getElementById("title");

signinBtn.onclick = function(){
    nameField.style.maxHeight = "0";
    title.innerHTML = "Sign In";
    signupBtn.classList.add("disable");
    signinBtn.classList.remove("disable");
}

signupBtn.onclick = function(){
    nameField.style.maxHeight = "60px";
    title.innerHTML = "Sign Up";
    signupBtn.classList.remove("disable");
    signinBtn.classList.add("disable");
}
   

</script>

<style>
.container{
    width:100%;
    height:100vh;
    background-image:  url(vetura.png);
    background-position: center;
    background-size: cover;
    position: relative;

}
.form-box{
    width:90%;
    max-width: 450px;
    position:absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #fff;
    padding: 50px 60px 70px;
    text-align: center;
}
.form-box h1{
    font-size: 30px;
    margin-bottom: 60px;
    color: #3c00a0;
    position: relative;
}
.form-box h1::after{
    content: '';
    width:30px;
    height:4px;
    border-radius: 3px;
    background: #3c00a0;
    position:absolute;
    bottom: -12px;
    left: 50px;
    transform:translateX(-50%);

}
.input-field {
    background: #aeaeae;
    margin: 15px 0;
    border-radius: 3px;
    display: flex;
    align-items: center;
    max-height: 65px;
    transition: max-height 0.5s;
    overflow: hidden;
}
 input{
        width:100%;
        background: transparent;
        border: 0;
        outline: 0;
        padding: 18px 15px;
    }
.input-field i{
    margin-left: 15px;
    color:#999;
}
form p{
    text-align: left;
    font-size: 13px;
}
form p a{
    text-decoration: none;
    color:#3c00a0;
}
.btn-field{
    width: 100%;
    display: flex;
    justify-content: space-between;
}
.btn-field button{
    flex-basis: 48%;
    background: #3c00a0;
    color: #fff;
    height: 40px;
    border-radius: 20px;
    border: 0;
    outline: 0;
    cursor: pointer;
    transition: background 1s ;
}
.input-group{
    height: 280px;
}
.btn-field button.disable{
    background: #aeaeae;
    color: #555;
}

</style>


    </body>
    </html>