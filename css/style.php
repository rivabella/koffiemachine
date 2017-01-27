<?php

header('Content-type: text/css; charset: UTF-8');

?>
body{
    background: #D7C0D0;
}
.red{
     color:red;
}
p::first-letter {
    font-weight:bold;
    font-size:110%;
    color: #442918;
}
.box { 
   display: inline-block;
   background-color:#EFF0D1;
   color:#3C2415;
   width: 310px; 
   height: 235px; 
   float: left; 
   box-shadow: 10px 10px 10px #888888
   
}

#coffee{
}
/* the coffee mug and the coffee will be created mostly using box shadows */
#coffee-mug{
	background: #3F2616;
	position: fixed;
	margin: 80px ;
	width: 100px;
	height: 100px;
	border-radius: 50%;
	/* the following box-shadow values are going to create the coffee mug and a coffee ring. */
	box-shadow: 0 0 0 10px #442918,
                    0 0 0 25px #3C2411,
                    0 0 0 42px #E4E6B2,
                    0 0 0 65px #EFF0D1;
                    
}

/*the mug needs a handle */
#coffee-mug::before{
	content: '';
	position: absolute;
	background: #EFF0D1;
	height: 60px;
	width: 30px;
	top: -70px;
	right: -75px;
	border-radius: 5px;
	box-shadow: inset 0px 50px 0 0px #EFF0D1;
	/* transform lets us rotate the handle on an angle */
	transform: rotate(50deg);
}

/* that coffee could look a little more realistic. let's add a simple ripple effect */
#coffee-mug::after{
	content: '';
	width: 20px;
	height: 20px;
	border-radius: 50%;
	position: absolute;
	border: 3px solid #77665C;
	left: 0;
	right: 0;
	margin-left: auto;
	margin-right: auto;
	top: 0;
	bottom: 0;
	margin-top: auto;
	margin-bottom: auto;
	opacity: 0.3;
	/* a little bit animation */
	animation: rings 3s ease-out infinite;
}

@keyframes rings{
	to{
		width: 150px;
		height: 150px;
		opacity: 0;
	}
}
