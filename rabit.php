<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="rabit.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet">


</head>
<body>
  <div class="navbar">
    <h3 style="color:white;margin-top:8px"> 01994269452</h3>
    <h3  style="color:white;margin-top:8px">rabitit122@gmail.com</h3>
  </div>
  <nav>
    <ul class="sidebar">
      <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></a></li>
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Our Work</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <ul>
      <li><a href="#"><img src="images/logo1718088965.png" alt=""></a></li>
      <li class="hideOnMobile"><a href="#">Home</a></li>
      <li class="hideOnMobile"><a href="#">About Us</a></li>
      <li class="hideOnMobile"><a href="#">Services</a></li>
      <li class="hideOnMobile"><a href="#">Our Work</a></li>
      <li class="hideOnMobile"><a href="#">Contact</a></li>
      <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg></a></li>
    </ul>
  </nav>
  <section class="hero">

<!-- LEFT -->

<div class="hero-text">

<p style="font-weight: bold;color:black;">✅ iconUnleash Your Potential</p>

<h1>
Unleash Your <br>
Digital Growth with <span>Rabit IT</span>
</h1>

<p>
Build, Grow & Scale Your Business in the Digital World
We provide expert services in Web Development, Digital Marketing, and Graphic Design to turn your ideas into reality.
</p>

<div class="btn-group">
<a href="#" class="btn btn-primary">Browse Course</a>
<a href="#" class="btn btn-outline">Join Free Seminar</a>
</div>

</div>

<!-- RIGHT -->

<div class="hero-image">

<img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" alt="">

<div class="play-btn">▶</div>

</div>

</section>



<section class="about">
<h1 class="about-title" style="color:red;margin-top:-80px;text-align:center;">
  About Our Company
</h1>
  <div class="about-container">
     
    <!-- LEFT IMAGE -->
    <div class="about-image">
      <img src="images/arefin.jpg" class="img-main">
      
      <img src="images/kawsar.jpeg" class="img-small">

      <img src="images/rabeya.jpeg" class="img-small2">

      <!-- PLAY BUTTON -->
      <div class="play-btn" onclick="openVideo()">▶</div>
    </div>

    <!-- RIGHT CONTENT -->
    <div class="about-content">
      <p class="tag">ABOUT OUR COMPANY</p>
      <h2>Grow Your Business Faster with Rabit IT</h2>

      <p class="desc">
        We provide the best IT services within your budget. We always try to complete your work according to your budget. We strongly believe in keeping our promises and delivering on time with full efficiency. So why go anywhere else?
Get the best experience now—contact Rabit IT today.
      </p>

      <div class="features">
        <div class="feature"><img style="width:50px;margin-top:10px;" src="images/woman.png" alt=""> Expert Needed Worker</div>
        <div class="feature"><img style="width:50px;margin-top:10px;" src="images/support.png" alt=""> Urgent Support For Clients</div>
      </div>

      <div class="quote">
        <p class="en">You can inbox us anytime and get connected with skilled professionals who will complete your work according to your requirements, In Sha Allah. Feel free to trust us with any kind of work within your budget.
Additionally, for any urgent needs, our support team is always ready to assist you. You can get any type of work done quickly by our experienced and efficient workers.</p> <p class="bn">যেকোনো সময় ইনবক্স করলেই পাবেন দক্ষ ওয়ার্কার। যে আপনার কাজটি আপনার রিকোয়ারমেন্ট অনুযায়ী সম্পন্ন করে দেবে ইন শাহ আল্লাহ। নির্দ্বিধায় নিশ্চিন্তে আপনার যেকোনো ধরনের কাজ করিয়ে নিতে পারেন আমাদের থেকে আপনার বাজেটের মধ্যে।
এছাড়াও যেকোনো জরুরী প্রয়োজনে পাবেন আমাদের সাপোর্ট। যেকোনো ধরনের কাজ খুবই আর্জেন্ট করিয়ে নিতে পারেন আমাদের দক্ষ এবং অভিজ্ঞ ওয়ার্কার দ্বারা।</p> 
      </div>

    </div>

  </div>
</section>

<!-- VIDEO POPUP -->
<div class="video-modal" id="videoModal">
  <div class="video-box">
    <span class="close" onclick="closeVideo()">✖</span>
    <iframe id="videoFrame" src="" frameborder="0" allowfullscreen></iframe>
  </div>
</div>


<style>
  *{
  margin: 0;
  padding: 0;
}
body{
  min-height: 100vh;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
}

nav{
  /* background-color:#ADF564; */
  box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);
  height: 80px;
  display: flex;
  justify-content: center; /* 🔥 center আনবে */
}

nav ul{
  width: 100%; /* 🔥 container effect */
  max-width: 1200px;
  list-style: none;
  display: flex;
  justify-content: space-around; /* balanced spacing */

  align-items: center;
  /* padding: 0 80px; */
}

nav li{
  height: 50px;
}

nav a{
  height: 100%;

  font-size:18px;
  font-weight: bold;
  text-decoration: none;
  display: flex;
  align-items: center;
  color: black;
}

nav li:first-child{
  margin-right: 40px; /* auto বাদ দিয়ে normal gap */
}
/* SIDEBAR FIX FOR MOBILE */
.sidebar {
  position: fixed;
  top: 0;
  right: 0;
  height: 100vh;
  width: 250px;
  background-color: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(12px);
  list-style: none;
  display: none;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  z-index: 9999; /* 🔥 add this line to put sidebar above everything */
}
.sidebar li{
  width: 100%;
}
.sidebar a{
  width: 100%;
}
.menu-button{
  display: none;
}
@media(max-width: 800px){
  .hideOnMobile{
    display: none;
  }
  .menu-button{
    display: block;
  }
}
@media(max-width: 400px){
  .sidebar{
    width: 100%;
  }
}
.navbar{
  background-color:red;
  height:40px;
  display: flex;
  justify-content: space-around;
}
/* SHAPE */




/* HERO SECTION */

.hero {
  max-width: 100%;
  display: flex;
min-height:720px;
  justify-content: space-between;
  align-items: center;
  padding: 60px 8%;
  gap: 40px;
  flex-wrap: wrap;

  /* 🔥 BACKGROUND START FROM NAVBAR */
  background: url('images/banner_bg.png') no-repeat;
  background-size: cover;
  background-position: center top; /* background navbar থেকে শুরু হবে */
  
  position: relative;
  z-index: 1;

}

/* optional overlay for text visibility */
.hero::before {
  content: '';
  position: absolute;
  top: 0; 
  left: 0;
  width: 100%; 
  height: 100%;
  background: rgba(255,255,255,0.3);
  z-index: 0;
}

/* ensure text and image stay above overlay */
.hero-text, .hero-image {
  position: relative;
  z-index: 1;
}

/* LEFT CONTENT */

.hero-text{
flex:1;
min-width:300px;
}

.hero-text h1{
font-size:42px;
line-height:1.3;
margin-bottom:15px;
}

.hero-text h1 span{
 color: hsl(120, 66%, 41%);
font-weight: bold;
}

.hero-text p{
color:#555;
margin-bottom:20px;
line-height:1.6;
}

/* BUTTONS */

.btn-group{
display:flex;
gap:15px;
flex-wrap:wrap;
}

.btn{
padding:12px 20px;
border-radius:8px;
text-decoration:none;
font-weight:bold;
}

.btn-primary{
background: hsl(120, 66%, 41%);;
color:white;
}

.btn-outline{
border:2px solid hsl(120, 66%, 41%);;
color: hsl(120, 66%, 41%);;
}

/* RIGHT IMAGE */

.hero-image{
flex:1;
min-width:300px;
position:relative;
}

.hero-image img{
width:100%;
border-radius:20px;
}

/* PLAY BUTTON */

.play-btn{
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
background:white;
border-radius:50%;
width:60px;
height:60px;
display:flex;
justify-content:center;
align-items:center;
font-size:22px;
color:#ef4444;
cursor:pointer;
box-shadow:0 0 10px rgba(0,0,0,0.2);
}

/* RESPONSIVE */

@media(max-width:768px){


.hero{
  width: 100%;
flex-direction:column;
text-align:center;
min-height:500px;
}

.hero-text h1{
font-size:28px;
}

.btn-group{
justify-content:center;
}

}
.about{
  padding:100px 500px;

   
    background:url('images/bg.png')no-repeat center center;
    background-size:cover;
    position:relative;
  


}

.about-title {
  opacity: 0;
  transform: translateY(-60px);
  transition: all 0.8s ease;
  font-family: "Faster One", system-ui;
  font-weight: 400;
  font-style: normal;
  font-size:40px;
  margin-left:-105px;
}



.about-title.show {
  opacity: 1;
  transform: translateY(0);
}
.about-container{
  display:flex;
  align-items:center;
  gap:80px;
  position:relative;
  
  
   padding:30px;
  margin-left:-140px;
  margin-top:60px;
  flex-wrap:wrap;
}


/* LEFT IMAGE */
.about-image{
  flex:1;
  position:relative;
  min-width:280px;
  max-width:500px;

}

.img-main{
  width:100%;
  margin-top:-30px;
  object-fit:cover;
  border-radius:15px;
}

/* small image overlay */
.img-small{
  width:50%;
  position:absolute;
  bottom:-100px;
  left:-30px;
  border:6px solid #fff;
  border-radius:12px;
  box-shadow:0 10px 25px rgba(0,0,0,0.15);
}
.img-small2{
    width:50%;
  position:absolute;
  bottom:-100px;
  left:200px;
  border:6px solid #fff;
  border-radius:12px;
  box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

/* PLAY BUTTON FIX */
.about-image .play-btn{
  position:absolute;
  bottom:20px;
  right:20px;
  background:#ff9900;
  color:white;
  width:55px;
  height:55px;
  border-radius:10px;
}

/* RIGHT */
.about-content{
  flex:1;
  min-width:300px;
  max-width:550px;

  border-radius:15px;

}

.tag{
      color: hsl(120, 66%, 41%);
  font-weight:bold;
  margin-bottom:10px;
  font-size:25px;
    font-family: "Faster One", system-ui;
  font-weight: 400;
  font-style: normal;
}

.about-content h2{
  font-size:35px;

  margin-bottom:15px;
    font-family: "Knewave", system-ui;
  font-weight: 400;
  font-style: normal;
}

.desc{
  color:#555;
  margin-bottom:20px;
  width: 600px;
}

.features{
  display:flex;
  gap:20px;
  
  flex-wrap:wrap;

}

.feature{

  padding:10px 15px;
   display:flex;
   align-items:center;
   font-size:20px;
   gap:10px;
  border-radius:8px;
  font-weight:500;
 
}

.quote{
  background:#eee;
  padding:15px;
  border-radius:10px;
  width: 750px;
   box-shadow:50 400px 100px rgba(0,0,0,0.08)
}
.quote p{
  margin-bottom:15px;
  line-height:1.6
}
.bn{
  font-family:"Noto Sans Bengali",sans-serif;
}

/* VIDEO MODAL */
.video-modal{
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:rgba(0,0,0,0.7);
  display:none;
  justify-content:center;
  align-items:center;
  z-index:9999;
}

.video-box{
  width:90%;
  max-width:700px;
  position:relative;
}

.video-box iframe{
  width:100%;
  height:400px;
  border-radius:10px;
}

.close{
  position:absolute;
  top:-30px;
  right:0;
  color:white;
  font-size:25px;
  cursor:pointer;
}

/* RESPONSIVE */
@media(max-width:768px){
  .about-title{
   margin-top:-50px;
    white-space:nowrap
  }
  .img-small2{
       position:relative;
    width:80%;
    left:140px;
     margin-top:-780px;
    bottom:0;
  
  }

  .img-main{
  width:100%;
 
  object-fit:cover;
  border-radius:15px;
}
    .about{
    
      margin-left:-390px;
   background:url('images/bg.png')no-repeat center center;
   background-size:cover;
   position:relative;
    }
  .about-container{
   
    flex-direction:column;
    gap:30px;
  }

  .about-image{
    max-width:100%;
  }

  .img-main{
    height:350px;

  }

  .img-small{
    position:relative;
    width:80%;
    left:-100px;
    
   
    bottom:0;
    margin-top:-10px;
  }

  .about-content{
    text-align:center;
  }

  .features{
    justify-content:center;
  }

}

/* PLAY BUTTON FIX */
.about-image .play-btn{
  position:absolute;
  bottom:20px;
  right:20px;
  background:#ff9900;
  color:white;
  width:55px;
  height:55px;
  border-radius:10px;
}

/* RIGHT */
.about-content{
  flex:1;
  min-width:300px;
  max-width:550px;
}
.about-image,
.about-content{
  opacity: 0;
  transition: all 0.8s ease;
}

/* LEFT IMAGE → left থেকে আসবে */
.about-image{
  transform: translateX(-80px);
}


/* RIGHT TEXT → right থেকে আসবে */
.about-content{
  transform: translateX(80px);
}

/* যখন visible হবে */
.show{
  opacity: 1;
  transform: translateX(0);
}
</style>
  <script>
    function showSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'flex'
    }
    function hideSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'none'
    }
    function openVideo(){
  document.getElementById("videoModal").style.display = "flex";
  document.getElementById("videoFrame").src = "https://www.youtube.com/embed/dQw4w9WgXcQ";
}

function closeVideo(){
  document.getElementById("videoModal").style.display = "none";
  document.getElementById("videoFrame").src = "";
}
const observer = new IntersectionObserver((entries)=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      entry.target.classList.add('show');
    }
  });
});

document.querySelectorAll('.about-image, .about-content').forEach(el=>{
  observer.observe(el);
});
const title = document.querySelector('.about-title');

const titleObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    }
  });
});

titleObserver.observe(title);
  </script>
</body>
</html>