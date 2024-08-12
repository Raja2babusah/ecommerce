<style>


.about-section{
    background: url(https://fadzrinmadu.github.io/hosted-assets/responsive-about-us-section-using-html/pic.jpg) no-repeat left;
    background-size: 55%;
    background-color: #fdfdfd;
    overflow: hidden;
    padding: 100px 0;
}

.inner-container{
    width: 55%;
    float: right;
    background-color: #fdfdfd;
    padding: 150px;
}

.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.text{
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}

@media screen and (max-width:1200px){
    .inner-container{
        padding: 80px;
    }
}

@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container{
        padding: 60px;
    }
}
</style>

<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
<div class="about-section">
  <div class="inner-container">
    <h1>About Us</h1>
    <p class="text">
    Kaliya Shopping Hub specializes in offering a wide range of electronic devices, including the latest mobile phones, laptops, and desktops. We are dedicated to providing high-quality, reliable technology products that cater to the diverse needs of our customers. Whether you're looking for cutting-edge smartphones, powerful laptops for work or play, or robust desktops for home or office use, Kaliya Shopping Hub is your go-to destination for all things tech.
    </p>
    <div class="skills">
      <span>Web Design</span>
      <span>Photoshop & Illustrator</span>
      <span>Coding</span>
    </div>
  </div>
</div>



















</div>     
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>