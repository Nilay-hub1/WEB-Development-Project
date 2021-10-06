<?php
// print_r($_POST);
// exit;
  if(isset($_POST['enrollment'])){

  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "applicationgtu";

  $conn = new mysqli($server,$username,$password,$dbname) or die("Unable to Connectt");
  
  echo "great work";
  $name = $_POST['name'];
  $enrollment = $_POST['enrollment'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
 


  $sql = "INSERT INTO  application123 (name, enrollment, phone, email) VALUES ('$name','$enrollment', '$phone','$email')";
  if($conn -> query($sql) == TRUE){

    echo "Connection Successfull";
    header("location: apply.html");

  }
  else{
    echo "Error: $sql <br> $conn->error";
  }


  $conn->close();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply</title>
    <link rel="stylesheet" href="./css/apply.css">
    <script src="./Js/apply.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Varela&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
    <div class="head">
        <div class="gtu_logo"><img src="./imgs/LOGO_GTU.png" alt="Please check your connection."></div>
        <h1>APPLY</h1>
       
    </div>
    <div class="navbar">
        <a href="./index.html">
            <div data-aos="fade-right" id="index-page">HOME</div>
        </a>
        <a href="./contact.html">
            <div data-aos="fade-left" id="contact-page">CONTACT US</div>
        </a>
    </div>

    <div class="apply-main">
            <div class="main">


            <div data-aos="fade-right" data-aos-delay="1000" class="apply-content">
                <div id="work-title">Work With Us.</div>
                <div id="work-break">______________________________________________________________________________
                </div>
                <div id="work-para">Apply here and get a chance to work with us. GTU will provide you one of the best platform to
                    carry your ideas and achieve your dreams.</div>
            </div>

            <div data-aos="zoom-in" data-aos-delay="750" class="form-box">
                <div class="form">
                    <form>
                    <lable class="lable">Name</lable>
                    <input name="name" class="input_tag" type="text" placeholder="Your Name">
                    <lable class="lable">Enrollment Number</lable>
                    <input name="enrollment" class="input_tag" type="" min="0" placeholder="Your Enrollment Number">
                    <lable class="lable">Phone Number</lable>
                    <input name="phone" class="input_tag" type="tel" placeholder="Your Phone Number">
                    <lable class="lable">Email id</lable>
                    <input name="email" class="input_tag" type="email" placeholder="Your Email id">
                    <lable class="lable">CV</lable>
                    <input class="input_tag" type="file" placeholder="Your CV" id="CV">
                   <div class="d-grid gap-2 d-md-block">
  <button class="btn btn-primary" type="submit">SUBMIT</button>
</form>
</div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 210,
            delay: 300,
            duration: 1000,
        });
    </script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>