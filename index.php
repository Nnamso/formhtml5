<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>::Form UI ::</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <meta name="viewport" content="width=device-width">
  <script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>-->
  <script>
    $(function() {
      $( "#datepicker" ).datepicker();
    });
    </script>
</head>

<style>
body {
 font-family: sans-serif;
 width: 60%;
 margin: 40px auto 0;
}
/* Quick reset */
ul, li, input {
 margin: 0;
 padding: 0;
}
li {
 list-style: none;
 margin-bottom: 30px;
}


form { color: #666; }
fieldset {
 padding: 40px 80px;
 border: 1px solid #e3e3e3;
}
legend { font-weight: bold; }

label {
 width: 18%;
 display: inline-block;
 font-weight: bold;
 color: #474747;
 cursor: pointer;
}
 
 input, textarea {
 width: 81%;
 max-width: 500px;
 background: white;
 color: #444;
 line-height: 35px;
 height: 35px;
 padding: 0 20px;
 border: 1px solid #e3e3e3;
 -webkit-border-radius: 25px;
 -moz-border-radius: 25px;
 border-radius: 25px;
 cursor: pointer;
 position: relative;
 -webkit-box-sizing: border-box;
 -moz-box-sizing: border-box;
 box-sizing: border-box;
}
input:focus, input:hover {
	border-color: #BAE1FF;
	-webkit-appearance: none; 
	-moz-appearance: none; 
	box-shadow: none;
	outline: none;
	
}
textarea {
	-webkit-appearance: none; 
	-moz-appearance: none; 
	outline: none;
	box-shadow: none;
 height: 300px;
 vertical-align: top;
 
 
}
 input[type=submit] {
 width: 100px;
 padding: 0;
 background: #12C977;
 color: white;
 -webkit-box-shadow: inset 0 0 0 1px #0EE886, 0 0 0 1px #11BF71;
 -moz-box-shadow: inset 0 0 0 1px #0EE886, 0 0 0 1px #11BF71;
 box-shadow: inset 0 0 0 1px #0EE886, 0 0 0 1px #11BF71;
}
 input::-webkit-inner-spin-button {
 padding-right: 10px;
}
 @media screen and (max-width: 750px) {
 label {
 margin-bottom: 10px;
 width: auto;
 display: block;
 }
 input, textarea {
 width: 100%;
 }
}



</style>
<body>
<form method="post" action="">
 <fieldset>
 <legend> Personal Information: </legend>
 <ul>
 <li>
 <label for="name"> Name: </label>
 <input id="name" name="name" type="text" required>
 </li>
 <li>
 <label for="email">Email address: </label>
 <input id="email" name="email" type="email" required> </li>
 <li>
 <label for="phone">Phone: </label>
 <input id="phone" name="phone" type="tel" pattern="\d{3}-?\d{3}-?\d{4}" placeholder="555-555-5555">
 </li>
 <li>
 <label for="age">Age: </label>
 <input id="age" name="age" type="number" min="1" max="120">
 </li>
 <li>
 <label for="dob">Date of Birth: </label>
 <input id="datepicker" name="dob" type="text" required>
 </li>
 <li>
 <label for="website">Personal Website: </label>
 <input id="website" name="website" type="url">
 </li>
 <li>
 <label for="bio"> Bio: </label>
 <textarea id="bio" name="bio" placeholder="I am...">
 </textarea>
 </li>
 <li>
 <input type="submit">
 </li>
 </ul>
 </fieldset>
</form>
</body>
</html>
