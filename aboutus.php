<!DOCTYPE html>
<html>
<head>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin:0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow:  pink;
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color:whitesmoke;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: blue;
}



@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1>
  <p>Here we are the students of Third Year Information Technology department.</p>
  
  <p>About to make medical and healthcare guide web application!.</p>
  <p>Our main aim is to help people to find the hospitals in the metropolitian areas like Mumbail,Delhi,Chennai,Kolkata!</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/ipminiproject/ashok.jpeg" alt="Ashok" style="width:100%">
      <div class="container">
        <h2>Ashok Chawdhary</h2>
        <p class="title">Project Member</p>
        <p>Third year IT 18IT1090.</p>
        <p>ashokchoudhary8108@gmail.com</p>
       
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/ipminiproject/manas.jpg" alt="Manas" style="width:100%">
      <div class="container">
        <h2>Manas Bhole</h2>
        <p class="title">Project Member</p>
        <p>Third year IT 18IT1038.</p>
        <p>manasbhole2000@gmail.com</p>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/ipminiproject/mayur.jpeg" alt="Mayur" style="width:100%">
      <div class="container">
        <h2>Mayur Agre</h2>
        <p class="title">Project Member</p>
        <p>Third year IT 18IT1009.</p>
        <p>mayur3agre@gmail.com</p>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>