<!DOCTYPE html>
<html>
<head>
<style>
*{
margin: 0;
padding: 0;
box-sizing: border-box;
 font-family: 'poppins', sans-serif;
}
.container{
width: 100%;
height: 150vh;
background: #001660;
display: flex;
align-items: center;
justify-content: center;
}
form{ 
background: #fff;
display: flex;
flex-direction: column; 
padding: 2vw 4vw; width: 90%; 
max-width: 500px; 
border-radius: 10px;
}
form h3{
color: #555;
font-weight: 800;
margin-bottom: 20px;
}
form input, form textarea, form select{
border: 0;
margin: 10px 10px;
padding: 20px;
outline: none;
background: #f5f5f5;
font-size: 16px;
}
form button{
padding: 15px;
background: #ff5361;
color:#fff;
font-size: 18px;
border: 0;
outline: none;
cursor: pointer;
width: 150px;
margin: 20px auto 0;
border-radius: 30px;
}
	
</style>

<meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Contact Form</title>
<meta http-equiv= "X-UA-Compatible" content= "ie=edge">
<meta name="description" content="This is description">
<meta name="keywords" content="html, css, web development, contact us form">
 <meta name="robots" content="INDEX, FOLLOW">
 <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<form action="submit.php" method="POST">   
<h3>Contact us</h3>
<select name="title" id="title"  required >
<option>Selecte Your Title*</option> 
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Ms">Ms</option>
</select>
<input type="text" id ="firstname" name="firstname" placeholder="Your First Name*" required >
<input type="text" id ="lastname" name="lastname" placeholder="Your Last Name*" required>
<input type="date" id = "birth" name="dateofbirth" >
<input type="tel" id ="phone" name="phone" placeholder=" Your Phone Number*" maxlength="10" required>
<input type="file" id = "file" onchange="readURL(this);" name="file" accept=".JPG,.PDF" >
<small class = "filedata">Accept only images and pdf</small>
<input type="email"  id ="email" name="email" placeholder="E-mail id" required >
<textarea rows="4" id = "message" name="msg" placeholder="How can we help you?" maxlength="300" ></textarea>
<button type="submit">Send</button>
</form>
</div>
</body>
</html>