<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/mk_MK/sdk.js#xfbml=1&version=v13.0" nonce="7x4lAUMZ"></script>
<script src="/js/bootstrap.min.js"></script>

</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">


<link href="style.css" rel="stylesheet">
<meta charset="UTF-8">
<title>Pizza</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
menu {background-color: #8a1f1f;}
</style>
<body>
<header>
<div class="header">
     <div class="topnav">
       <a class="nav" href="about.php">ABOUT US</a>
       <a class="nav" href="menu.php">MENU</a>
       <a class="nav active" href="index.php">HOME</a>
       <div class="social-media">
       <a href="https://www.facebook.com/RedCockChicken/"><svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="3rem" viewBox="0 0 64 64" aria-labelledby="title"
            aria-describedby="desc" role="img" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>Facebook</title>
         <desc>A solid styled icon from Orion Icon Library.</desc>
          <path class="fb"
          d="M39.8 12.2H48V0h-9.7C26.6.5 24.2 7.1 24 14v6.1h-8V32h8v32h12V32h9.9l1.9-11.9H36v-3.7a3.962 3.962 0 0 1 3.8-4.2z"
           fill="#1877f2;"></path>
          </svg></a>


       <a href="https://www.instagram.com/redcock_chickenspot/"> <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="3rem" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 132.004 132"><defs><linearGradient id="b"><stop offset="0" stop-color="#3771c8"/><stop stop-color="#3771c8" offset=".128"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></linearGradient><linearGradient id="a"><stop offset="0" stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></linearGradient><radialGradient id="c" cx="158.429" cy="578.088" r="65" xlink:href="#a" gradientUnits="userSpaceOnUse" gradientTransform="matrix(0 -1.98198 1.8439 0 -1031.402 454.004)" fx="158.429" fy="578.088"/><radialGradient id="d" cx="147.694" cy="473.455" r="65" xlink:href="#b" gradientUnits="userSpaceOnUse" gradientTransform="matrix(.17394 .86872 -3.5818 .71718 1648.348 -458.493)" fx="147.694" fy="473.455"/></defs><path fill="url(#c)" d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z" transform="translate(1.004 1)"/><path fill="url(#d)" d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z" transform="translate(1.004 1)"/><path fill="#fff" d="M66.004 18c-13.036 0-14.672.057-19.792.29-5.11.234-8.598 1.043-11.65 2.23-3.157 1.226-5.835 2.866-8.503 5.535-2.67 2.668-4.31 5.346-5.54 8.502-1.19 3.053-2 6.542-2.23 11.65C18.06 51.327 18 52.964 18 66s.058 14.667.29 19.787c.235 5.11 1.044 8.598 2.23 11.65 1.227 3.157 2.867 5.835 5.536 8.503 2.667 2.67 5.345 4.314 8.5 5.54 3.054 1.187 6.543 1.996 11.652 2.23 5.12.233 6.755.29 19.79.29 13.037 0 14.668-.057 19.788-.29 5.11-.234 8.602-1.043 11.656-2.23 3.156-1.226 5.83-2.87 8.497-5.54 2.67-2.668 4.31-5.346 5.54-8.502 1.18-3.053 1.99-6.542 2.23-11.65.23-5.12.29-6.752.29-19.788 0-13.036-.06-14.672-.29-19.792-.24-5.11-1.05-8.598-2.23-11.65-1.23-3.157-2.87-5.835-5.54-8.503-2.67-2.67-5.34-4.31-8.5-5.535-3.06-1.187-6.55-1.996-11.66-2.23-5.12-.233-6.75-.29-19.79-.29zm-4.306 8.65c1.278-.002 2.704 0 4.306 0 12.816 0 14.335.046 19.396.276 4.68.214 7.22.996 8.912 1.653 2.24.87 3.837 1.91 5.516 3.59 1.68 1.68 2.72 3.28 3.592 5.52.657 1.69 1.44 4.23 1.653 8.91.23 5.06.28 6.58.28 19.39s-.05 14.33-.28 19.39c-.214 4.68-.996 7.22-1.653 8.91-.87 2.24-1.912 3.835-3.592 5.514-1.68 1.68-3.275 2.72-5.516 3.59-1.69.66-4.232 1.44-8.912 1.654-5.06.23-6.58.28-19.396.28-12.817 0-14.336-.05-19.396-.28-4.68-.216-7.22-.998-8.913-1.655-2.24-.87-3.84-1.91-5.52-3.59-1.68-1.68-2.72-3.276-3.592-5.517-.657-1.69-1.44-4.23-1.653-8.91-.23-5.06-.276-6.58-.276-19.398s.046-14.33.276-19.39c.214-4.68.996-7.22 1.653-8.912.87-2.24 1.912-3.84 3.592-5.52 1.68-1.68 3.28-2.72 5.52-3.592 1.692-.66 4.233-1.44 8.913-1.655 4.428-.2 6.144-.26 15.09-.27zm29.928 7.97c-3.18 0-5.76 2.577-5.76 5.758 0 3.18 2.58 5.76 5.76 5.76 3.18 0 5.76-2.58 5.76-5.76 0-3.18-2.58-5.76-5.76-5.76zm-25.622 6.73c-13.613 0-24.65 11.037-24.65 24.65 0 13.613 11.037 24.645 24.65 24.645C79.617 90.645 90.65 79.613 90.65 66S79.616 41.35 66.003 41.35zm0 8.65c8.836 0 16 7.163 16 16 0 8.836-7.164 16-16 16-8.837 0-16-7.164-16-16 0-8.837 7.163-16 16-16z"/></svg></a>


       <a href="https://wa.me/<+38932605099>"> <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="3rem" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" data-name="Layer 1" viewBox="0 0 512 512"><defs><linearGradient id="linear-gradient" x1="1337.28" y1="518.24" x2="1337.28" y2="-2164.82" gradientTransform="matrix(0.19, 0, 0, -0.19, 0.81, 98.89)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#61fd7d"/><stop offset="1" stop-color="#2bb826"/></linearGradient></defs><title>wa</title><path class="cls-1" d="M512,382.07c0,2.8-.09,8.88-.26,13.58-.41,11.49-1.32,26.32-2.7,33.07a109.76,109.76,0,0,1-9.27,27.71,98.45,98.45,0,0,1-43.43,43.39,110.21,110.21,0,0,1-27.87,9.28c-6.69,1.35-21.41,2.24-32.82,2.65-4.71.17-10.79.25-13.58.25l-252.1,0c-2.8,0-8.88-.09-13.58-.26-11.49-.41-26.32-1.32-33.07-2.69a110.37,110.37,0,0,1-27.72-9.28A98.5,98.5,0,0,1,12.18,456.3,110.21,110.21,0,0,1,2.9,428.43C1.55,421.74.66,407,.25,395.61.08,390.91,0,384.82,0,382l0-252.1c0-2.8.09-8.88.25-13.58C.71,104.86,1.62,90,3,83.28a110.37,110.37,0,0,1,9.27-27.72A98.59,98.59,0,0,1,55.7,12.18,110.21,110.21,0,0,1,83.57,2.9C90.26,1.55,105,.66,116.39.25,121.09.08,127.18,0,130,0l252.1,0c2.8,0,8.88.09,13.58.25C407.14.71,422,1.62,428.72,3a110.37,110.37,0,0,1,27.72,9.27A98.59,98.59,0,0,1,499.82,55.7a110.21,110.21,0,0,1,9.28,27.87c1.35,6.69,2.24,21.41,2.65,32.82.17,4.7.25,10.79.25,13.58Z" transform="translate(0 0)"/><path class="cls-2" d="M379.56,131.67A172.4,172.4,0,0,0,256.67,80.73C161,80.73,83.05,158.64,83.05,254.42a173.47,173.47,0,0,0,23.2,86.82l-24.65,90,92.08-24.17a173.55,173.55,0,0,0,83,21.17h.07c95.73,0,173.69-77.91,173.69-173.69A172.73,172.73,0,0,0,379.53,131.7l0,0ZM256.72,399a144.17,144.17,0,0,1-73.52-20.14l-5.29-3.15L123.27,390l14.59-53.27-3.42-5.47a143.29,143.29,0,0,1-22.11-76.81C112.33,174.81,177.1,110,256.8,110A144.34,144.34,0,0,1,401.12,254.48c-.07,79.67-64.83,144.46-144.41,144.46v0ZM335.87,290.8c-4.32-2.2-25.68-12.67-29.65-14.12s-6.85-2.19-9.8,2.2-11.22,14.11-13.76,17-5.06,3.29-9.37,1.09-18.35-6.77-34.92-21.56c-12.88-11.5-21.61-25.74-24.15-30s-.29-6.71,1.92-8.83c2-1.93,4.32-5.06,6.51-7.6s2.88-4.32,4.32-7.26.74-5.42-.35-7.6-9.8-23.55-13.34-32.25c-3.49-8.51-7.12-7.32-9.79-7.47s-5.42-.13-8.29-.13a16,16,0,0,0-11.57,5.41c-4,4.32-15.2,14.86-15.2,36.22s15.54,42,17.72,44.91,30.61,46.76,74.14,65.54c10.34,4.44,18.42,7.11,24.72,9.18a60,60,0,0,0,27.32,1.71c8.35-1.23,25.68-10.49,29.31-20.62s3.63-18.83,2.55-20.62-3.91-3-8.29-5.22l0,0Z" transform="translate(0 0)"/></svg></a>
    </div> 
      </div>
  </div>  
<!-- Start Content -->
<div id="home" class="w3-content">

<!-- Menu -->
<div id="menu" class="w3-container w3-xxlarge w3-padding-64" >
<h1 class="w3-center w3-jumbo w3-padding-32">THE MENU</h1>
<div class="w3-row w3-center w3-border w3-border-dark-grey">
<a href="#Main"><div class="w3-third w3-padding-large w3-red">Main</div></a>
<a href="#Breakfast"><div class="w3-third w3-padding-large w3-hover-red">Breakfast</div></a>
<a href="#Kids Menu"><div class="w3-third w3-padding-large w3-hover-red">Kids Menu</div></a>
</div>

<div id="Main" class="w3-container w3-white w3-padding-32">
<style>
    body {
        background: url(https://images.unsplash.com/photo-1606149059549-6042addafc5a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80);
  background-size: cover;
  
}
    
</style>
<h1><b>4 Tenders</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">Crispy Chicken Tenders, french fries</p>

<hr>
<h1><b>5 Wings</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">Crispy wings, french fries</p>

<hr>
<h1><b>6 Chicken nuggets</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey"><p class="w3-text-grey">Crispy chicken nuggets, french fries</p>
</p>

<hr>
<h1><b>Tender sandwich</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">3 tenders, seasonal salad, mayo, french fries</p>

<hr>
<h1><b>Smash burger</b> 
<span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">2 patties, toasted bread roll, caramelized onions, yellow cheese, french fries</p>

<hr>
<h1><b>Triple smash</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">3 patties, toasted bread roll, caramelized onions, yellow cheese, french fries</p>

<hr>
<h1><b>Crispy chicken fillet sandwich</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">crispy chicken steak, seasonal salad, mayo, french fries</p>

<hr>
<h1><b>Double crispy chicken fillet sandwich</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">crispy chicken steak x2, seasonal salad, mayo, french fries</p>

<hr>
<h1><b>Double crispy chicken fillet sandwich</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">crispy chicken steak x2, seasonal salad, mayo, french fries</p>

<hr>
<h1><b>Grande crispy</b> <span class="w3-tag w3-grey w3-round">Popular</span>
<span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">crispy chicken steak x2, seasonal salad, mayo, french fries, bacon, yellow cheese, BBQ sauce</p>

<hr>
<h1><b>Bacon smash</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">2 patties, french fries, bacon, yellow cheese, caramelized onions, toasted bread roll</p>

<hr>
<h1><b>Triple bacon smash</b> <span class="w3-tag w3-grey w3-round">Popular</span>
<span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">3 patties, french fries, bacon, yellow cheese, caramelized onions, toasted bread roll</p>

<hr>
<h1><b>Mini combo box</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">1 tender, french fries, 2 wings, 3 nuggets,</p>

<hr>
<h1><b>Combo box</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">4 tenders, 4 wings, 4 nuggets, french fries x2, 4 onion rings, sauce</p>

<hr>
<h1><b>Mega combo box</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">8 tenders, 8 wings, 8 nuggets, french fries x4, 8 onion rings, sauce</p>

</div>

<h1 id="Breakfast" class="w3-center w3-jumbo w3-padding-32">Breakfast</h1>
<div class="w3-container w3-white w3-padding-32">

<h1><b>Grill chesse</b> 
<span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">Toasted bread roll with butter, cheese x2</p>

<hr>
<h1><b>Bacon grill chesse</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">Toasted bread roll with butter, cheese x2, bacon</p>

<hr>
<h1><b>Bacon, eggs & toast</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">Toasted bread roll, 2 eggs, bacon</p>

<hr>
<h1><b>Eggs & toast</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">Toasted bread roll, 2 eggs</p>

<hr>
<h1><b>Bacon sandwich</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">Toasted bread roll, 1 egg, bacon</p>

</div>

<h1 id="Kids Menu" class="w3-center w3-jumbo w3-padding-32">Kids Menu</h1>
<div class="w3-container w3-white w3-padding-32">

<h1><b>2 Tenders</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">2 crispy Chicken Tenders, french fries</p>

<hr>
<h1><b>3 Wings</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">3 crispy wings, french fries</p>


<hr>
<h1><b>4 Chicken nuggets</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey"><p class="w3-text-grey">4 crispy chicken nuggets, french fries</p>
</p>

<hr>
<h1><b>Mini tender sandwich</b> <span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">2 tenders, seasonal salad, mayo, french fries</p>

<hr>
<h1><b>Single smash burger</b> 
<span class="w3-right w3-tag w3-dark-grey w3-round"></span></h1>
<p class="w3-text-grey">1 patty, toasted bread roll, caramelized onions, french fries</p>

</div>
</div>

<!-- End Content -->
</div>
</body>
</html>

