
<style>
    
* {
	margin:0px;
	padding:0px;
}
*, *:after, *:before { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing: border-box; }

.clearfix:before, .clearfix:after { display: table; content: ''; }
.clearfix:after { clear: both; }


body {
	background: #ffffff;
	color: #000;
	font-weight: normal;
	font-size: 1em;
	font-family: 'Roboto', Arial, sans-serif;
}

input:focus, textarea:focus, keygen:focus, select:focus {
	outline: none;
}
::-moz-placeholder {
	color: #666;
	font-weight: 300;
	opacity: 1;
}

::-webkit-input-placeholder {
	color: #666;
	font-weight: 300;
}


/* Contact Form Styling */
.container {
	padding: 0 50px 70px;
}
.textcenter {
	text-align: center;
}
.section1 {
	text-align: center;
	display: table;
	width: 100%;
}
.section1 .shtext {
	display: block;
	margin-top: 20px;
}
.section1 .seperator {
	border-bottom:1px solid #a2a2a2;
	width: 35px;
	display: inline-block;
	margin: 20px;
}

.section1 h1 {
	font-size: 40px;
	color: #fff;
	font-weight: normal;
}

.section2 {
    width: 1200px;
    margin: 25px auto;
}
.section2 .col2 {
	width: 48.71%;
}
.section2 .col2.first {
	float: left;
}
.section2 .col2.last {
	float: right;
}
.section2 .col2.column2 {
	padding: 0 30px;
}
.section2 span.collig {
	color: #fff;
	margin-right: 10px;
	display: inline-block;
}
.section2 .sec2addr {
	display: block;
	line-height: 26px;
}
.section2 .sec2addr p:first-child {
	margin-bottom: 10px;
}
.section2 .sec2contactform input[type="text"], 
.section2 .sec2contactform input[type="email"],
.section2 .sec2contactform textarea {
    padding: 18px;
    border: 0;
    background: #000;
    margin: 7px 0;
}
.section2 .sec2contactform textarea {
	width: 100%;
	display: block;
	color: #fff;
  resize:none;
}
.section2 .sec2contactform input[type="submit"] {
	padding: 15px 40px;
    color: #fff;
    border: 0;
    background: #A44DD8;
    font-size: 16px;
    text-transform: uppercase;
    margin: 7px 0;
    cursor: pointer;
}
.section2 .sec2contactform h3 {
	font-weight: normal;
    margin: 20px 0;
    margin-top: 30px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 19px;
    color: #fff;
}
.collig1
{
    color:#fff;
}

/* @media querries */

@media only screen and (max-width: 1266px) {
	.section2 {
		width: 100%;
	}
}
@media only screen and (max-width: 960px) {
	.container {
		padding: 0 30px 70px;
	}
	.section2 .col2 {
		width: 100%;
		display: block;
	}
	.section2 .col2.first {
		margin-bottom: 10px;
	}
	.section2 .col2.column2 {
		padding: 0;
	}
	body .sec2map {
		height: 250px !important;
	}
}
@media only screen and (max-width: 768px) {
	.section2 .sec2addr {
		font-size: 14px;
	}
	.section2 .sec2contactform h3 {
		font-size: 16px;
	}
	.section2 .sec2contactform input[type="text"], .section2 .sec2contactform input[type="email"], .section2 .sec2contactform textarea {
		padding: 10px;
		margin:3px 0;
	}
	.section2 .sec2contactform input[type="submit"] {
		padding: 10px 30px;
		font-size: 14px;
	}
}
@media only screen and (max-width: 420px) {
	.section1 h1 {
		font-size: 28px;
	}	
}
</style>
<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
	<?php include 'includes/navbar.php'; ?>
    <body>
	<div class="container">
		<div class="innerwrap">
		
			<section class="section1 clearfix">
				<div class="textcenter">
					<span class="shtext">Contact Us</span>
					<span class="seperator"></span>
					<h1>Drop Us a Mail</h1>
				</div>
			</section>
		
			<section class="section2 clearfix">
				<div class="col2 column1 first">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d454629.8061169132!2d84.6930407!3d27.0997477!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ecabb5cb27ca09%3A0x3039568804cad152!2sKalaiya%2044400!5e0!3m2!1sen!2snp!4v1723463105217!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="col2 column2 last">
					<div class="sec2innercont">
						<div class="sec2addr">
							<p></p>
							<p><span class="collig1">Phone :+9779812240690</p>
							<p><span class="collig1">Email :sahrajababu047gmail.com</p>
						
						</div>
					</div>
					<div class="sec2contactform">
						<h3 class="sec2frmtitle">Want to Know More?? Drop Us a Mail</h3>
						<form action="">
							<div class="clearfix">
								<input class="col2 first" type="text" placeholder="FirstName">
								<input class="col2 last" type="text" placeholder="LastName">
							</div>
							<div class="clearfix">
								<input  class="col2 first" type="Email" placeholder="Email">
								<input class="col2 last" type="text" placeholder="Contact Number">
							</div>
							<div class="clearfix">
								<textarea name="textarea" id="" cols="30" rows="7">Your message here...</textarea>
							</div>
							<div class="clearfix"><input type="submit" value="Send"></div>
						</form>
					</div>

				</div>
			</section>
		
		</div>
	</div>
    </div>     
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
    <script></script>
</body>







