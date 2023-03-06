
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> 
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <style>
            body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=tel]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media  screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

.action{
        display:flex; }
    .action a, button{
        margin-right:12px; }
        .margin-tb {
             padding-bottom: 30px;
             padding-top: 30px;
        }
        /* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  margin-right: 25px;
}


/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
  margin-right: 25px;
}

select{
  border:1px solid #000000;
  padding: 10px 20px;
  border-radius:5px;
}

select:focus{
  outline:none;
}
        </style>
    </head>
    <body class="antialiased">

      <header>
        @guest
        <div class="topnav" id="topnavigation">
          <a style="float:right;" class="btn @if(Route::is(['login']))active @endif" aria-haspopup="true" id="product_page" href="{{ route('logout') }}">Login</a>
        </div>
        @endguest
        @auth
        <div class="topnav" id="topnavigation">
          <a style="float:left;" class="btn @if(Route::is(['user.index']))active @endif" aria-haspopup="true" id="product_page" href="{{ route('user.index') }}">User</a>
          <a style="float:left;" class="btn @if(Route::is(['blog.index']))active @endif" aria-haspopup="true" id="category_page" href="{{ route('blog.index') }}">Blog</a>
          <a style="float:left;" class="btn @if(Route::is(['category.index']))active @endif" aria-haspopup="true" id="category_page" href="{{ route('category.index') }}">Category</a>
          <a style="float:right;" class="btn @if(Route::is(['logout']))active @endif" aria-haspopup="true" id="product_page" href="{{ route('logout') }}">{{ Auth::user()->name }} <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></a>
          
        
          </div>
        @endauth
        

        <div class="topnav" id="topnavigation">
                 </div>

        
      


  </header>