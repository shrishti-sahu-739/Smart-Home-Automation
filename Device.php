<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<title>Smart Home Control</title>

<style>
/* --- your existing CSS unchanged --- */
*{
    margin: 0px;
    padding:0px;
    box-sizing: border-box;
}
.navbar {
  border: 2px solid #FF9933;
  padding: 30px 24px;
  background-color: #FAF9F8;
  border-radius: 1rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.title {
  font-size: 2rem;
  color: #FF9933;
  font-weight: bold;
  font-family: serif;
}
.navbar .list {
  display: flex;
  list-style: none;
  gap: 2.5rem;
}
.navbar .list a {
  text-decoration: none;
  font-size: 25px;
  color: #7D7D7D;
  font-family: serif;
  transition: color 0.3s ease;
}
.list a:hover { color: #FF9933; }
.phone-icon a {
  text-decoration: none;
  color: #FF9933;
  font-size: 25px;
  display: flex;
  align-items: center;
   gap: 8px;
}
.phone-icon a:hover{ text-decoration: none; }
.phone-icon .material-icons { font-size: 22px; color: #FF9933; }
.sub-menu{ display: none; }
.navbar ul li { position: relative; }
.navbar ul li:hover .sub-menu {
  display: block;
  position: absolute;
  width: 250px;
  top: 100%;
  left: 0;
  background-color: #fdf1e5;
  border-radius: 10px;
  z-index: 999;
  margin: 0;
  padding: 5px 10px;
}
.navbar ul li:hover .sub-menu ul{ display: block; margin: 10px; }
.navbar ul li:hover .sub-menu ul li{ display: block; margin: 20px; text-align: left; }
.navbar ul li:hover .sub-menu ul li a:hover{ color:#f93; }

.boby {
  font-family: Arial, sans-serif;
  background: #2b2f34;
  color: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
  height: 750px;
}
.boby h1 { margin-top:3rem; color: white; }
.devices-container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 18px;
  width: 95%;
  max-width: 500px;
  margin-top:5rem;
}

.footer{
  height: 350px;
  background-color:#ffe1c44d;
  margin-top: 60px;
  display: flex;
  justify-content: space-around;
}
ul{ 
list-style: none; 
}
.logo{
 margin-top:5%; 
 font-size:30px;
  color: #FF9933;
  }
.foot1, .foot2, .foot3 { 
  margin-top: 5%; 
}
h3{
   font-size: 20px;
   }
a{ 
  display: flex; 
  gap: 2rem;
   text-decoration: none;
    font-size: 20px; 
    color: #7D7D7D;
   }
a:hover{ 
  color: #FF9933; 
  text-decoration: underline; 
}
.imge{ 
  display: flex; 
  gap: 2rem; 
  margin-top: 1.1rem;
 }
.copyright{ 
  margin-top: 1rem; 
  color: #7D7D7D; 
  font-size:20px; 
  }


  /* .boby{
  font-family: Arial, sans-serif;
  background: linear-gradient(135deg,#1f2733,#2b2f34);
  color:#fff;
  display:flex;
  flex-direction:column;
  align-items:center;
  padding:40px 20px;
} */

/* .boby h1{
  margin-top:2rem;
  font-size:34px;
  letter-spacing:1px;
} */

.devices-container{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:25px;
  width:90%;
  max-width:900px;
  margin-top:4rem;
}

.device-card{
  background:#242a31;
  padding:30px 20px;
  border-radius:16px;
  text-align:center;
  box-shadow:0 8px 25px rgba(0,0,0,0.5);
  transition:all 0.3s ease;
  position:relative;
}

.device-card:hover{
  transform:translateY(-8px);
  box-shadow:0 0 20px rgba(255,153,51,0.6);
}

.device-name{
  font-size:20px;
  margin-bottom:20px;
  font-weight:bold;
  color:#fff;
}

.switch{
  position:relative;
  width:60px;
  height:30px;
  display:inline-block;
}

.switch input{
  display:none;
}

.slider{
  position:absolute;
  cursor:pointer;
  inset:0;
  background:#ff4646;
  border-radius:34px;
  transition:0.4s;
}

.slider:before{
  content:"";
  position:absolute;
  height:22px;
  width:22px;
  left:4px;
  bottom:4px;
  background:white;
  border-radius:50%;
  transition:0.4s;
}

input:checked + .slider{
  background:#00d26a;
}

input:checked + .slider:before{
  transform:translateX(30px);
}

/* Power Dashboard */

.dashboard{
  width:90%;
  max-width:600px;
  background:#242a31;
  margin-top:40px;
  padding:25px;
  border-radius:14px;
  box-shadow:0px 0px 18px rgba(0,0,0,0.45);
}

.usage-title{
  text-align:center;
  margin-bottom:12px;
  font-size:18px;
}

.usage-bar{
  width:100%;
  height:14px;
  background:#3a4148;
  border-radius:20px;
  overflow:hidden;
}

.usage-fill{
  height:100%;
  width:48%;
  background:linear-gradient(90deg,#00d26a,#00ff88);
  transition:0.5s;
} 




  .devices-container{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
  gap:25px;
  width:90%;
  max-width:900px;
  margin-top:4rem;
}


</style>
</head>

<body>
<header>
   <nav class="navbar">
    <div class="title">SmartHive</div>
    <ul class="list">
      <li><a href="Home.html">Home</a></li>
      <li><a href="Keypads.html">Products</a>
       <div class="sub-menu">
        <ul>
          <li><a href="Products.html">Smart Lighting</a></li>
          <li><a href="Smart-Fans.html">Smart Fans</a></li>
          <li><a href="">Smart Switches</a></li>
          <li><a href="Smart-AC.html">Smart A.C</a></li>
        </ul>
       </div>
      </li>
      <li><a href="pra.html">Catalogue</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="blog.html">Blog</a></li>
      <li><a href="conatct.html">Contact</a></li>
            <li><a href="Device.php">Device Control</a></li>

    </ul>
    <div class="phone-icon">
      <a href="#" id="phone"><span class="material-icons">call</span> +91 94244 40489</a>
    </div>
  </nav>
</header>

<div class="boby">
<h1>Smart Device Control</h1>

<div class="devices-container">

    <div class="device-card">
        <div class="device-name"> Light</div>
        <label class="switch">
            <input type="checkbox" onchange="updateDevice('Light', this.checked)">
            <span class="slider"></span>
        </label>
    </div>

    <div class="device-card">
        <div class="device-name">Fan</div>
        <label class="switch">
            <input type="checkbox" onchange="updateDevice('Fan', this.checked)">
            <span class="slider"></span>
        </label>
    </div>

    <div class="device-card">
        <div class="device-name"> AC</div>
        <label class="switch">
            <input type="checkbox" onchange="updateDevice('AC', this.checked)">
            <span class="slider"></span>
        </label>
    </div>

    <div class="device-card">
        <div class="device-name"> TV</div>
        <label class="switch">
            <input type="checkbox" onchange="updateDevice('TV', this.checked)">
            <span class="slider"></span>
        </label>
    </div>

    <div class="device-card">
        <div class="device-name"> Switch</div>
        <label class="switch">
            <input type="checkbox" onchange="updateDevice('Switch', this.checked)">
            <span class="slider"></span>
        </label>
    </div>

    <div class="device-card">
        <div class="device-name"> Fridge</div>
        <label class="switch">
            <input type="checkbox" onchange="updateDevice('Fridge', this.checked)">
            <span class="slider"></span>
        </label>
    </div>

</div>

<div class="dashboard">
    <div class="usage-title">Power Consumption</div>
    <div class="usage-bar">
        <div class="usage-fill"></div>
    </div>
</div>
</div>

<div class="footer">
  <div class="logo">
    <h1>SmartHive</h1>
    <div class="imge">
      <img src="facebook.jpg" height="28px">
      <img src="twitter.jpg" height="28px">
      <img src="instagram.jpg" height="28px">
      <img src="youtube.jpg" height="28px">
    </div>
    <div class="copyright">
      <p>© 2025 Pert Infoconsulting Pvt Ltd <br>All Rights Reserved.</p>
    </div>
  </div>
  <div class="foot1">
    <ul>
      <h3>Quick Links</h3>
      <li><a href="Home.html">Home</a></li>
      <li><a href="Keypads.html">Products</a></li>
      <li><a href="privacy-policy.html">Privacy Policy</a></li>
      <li><a href="terms And Condition.html">Terms & Condition</a></li>
      <li><a href="conatct.html">Contact</a></li>
    </ul>
  </div>
  <div class="foot2">
     <ul>
      <h3>Contact Us</h3>
      <li><a href="">Sales: +91 9100 9200 31</a></li>
      <li><a href="">hello@pert.me</a></li>
      <li><a href="">Support: +91 7075 01 02 03</a></li>
      <li><a href="">support@pert.me</a></li>
    </ul>
  </div>
   <div class="foot3">
     <ul>
      <h3>Address</h3>
      <li><a href="">Experience Center</a></li>
      <li><a href="">Alladin Mansion, 1-11-252/1A-1D, Street Number <br>3, near Shoppers Stop, Begumpet</a></li>
      <li><a href="">Hyderabad,Telangana-500016</a></li>
    </ul>
  </div>
</div>


<script>

document.querySelectorAll(".device-card input[type='checkbox']").forEach(input => {

  input.addEventListener("change", () => {

    const deviceName = input.closest(".device-card").querySelector(".device-name").innerText.trim();
    const status = input.checked ? "ON" : "OFF";

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "update_device.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.send(
      "device=" + encodeURIComponent(deviceName) +
      "&status=" + encodeURIComponent(status)
    );

    xhr.onload = function() {
      if (xhr.status === 200) {
        console.log("Saved:", xhr.responseText);
      } else {
        console.error("Error saving status");
      }
    };

  });

});

</script>


</body>
</html>
