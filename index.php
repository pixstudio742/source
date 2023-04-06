<?php
 include "database.php";
?>

<?php
if(isset($_POST['submit'])){
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $phone = ($_POST['phone']);
    $semester = ($_POST['semester']);

    $image= $_FILES["image"]["name"];

    $tempname= $_FILES["image"]["tmp_name"];
    $folder = "images/".$image;
    $image_move = move_uploaded_file($tempname, $folder);

    $url = ($_POST['url']);
    $confirm = ($_POST['confirm']);

$query =mysqli_query($conn,"insert into form(name,email,phone,semester,image,url,confirm) values('$name',' $email','$phone','$semester','$image','$url','$confirm')");


if ( $query) {

    ?>
       <script>
          alert("Successfully Register");
       </script>
     <?php 
  
    
  
    }
    else{
  
      ?>
      <script>
         alert("Unsuccessful");
      </script>
    <?php 
  
    }
  
  
    
  
   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Picnic 2k22</title>
    <style>
        body{
            
            background-image: url('img2.jpg');
            line-height: 0.8;
            font-weight: 500;
            background-repeat:no-repeat;
            background-size: cover;
            background-attachment: fixed;
           
            
        
            
        }
        font{
            font-weight: 700;
            font-size:40px;
        }
        .box{
        width:525px;
        height:auto;
        background-color: rgba(240, 227, 225, 0.69);
        padding: 35px;
        top:50%;
	    left:50%;
	    position: absolute;
        transform: translate(-50%,-37%);
        border-radius: 7px;
        margin: 10px;
    }
        
        .form-control{
            height: calc(1.9em + 0.75rem + 2px);
        }
        .mt-5, .my-5 {
        margin-top: 1rem!important;
        }
    @media(max-width:600px){
        .box{
            width:100%!important;
            padding: 30px!important;
        }
    }
    </style>
</head>
<body>

  <div class="container">  
   <div class="box">
    <center>
        <font>
            PICNIC 2K22
        </font>
    </center>
    <form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name"><b> Name</b></label>
        <input type="text" class="form-control" name="name" placeholder="Enter your full name" required>
    </div>
    <div class="form-group">
        <label for="email"><b>Email</b></label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
        <label for="phone"><b>Phone</b></label>
        <input type="number" class="form-control" name="phone" placeholder="Enter your num" required>
    </div>
    <div class="form-group">
        <label for="semester"><b>Academic Year</b></label>
        <select name="semester" id="sem" class="form-control" required onchange="change()">
            <option value="0" selected disabled>--choose your option--</option>
            <option value="1st">1st Year</option>
            <option value="2nd"> 2nd Year</option>
            <option value="3rd"> 3rd Year</option>
            <option value="4th"> Ex Senior Student</option>
            <option value="teach"> Teachers</option>
        </select>
    </div>
    <div class="form-group" id="cv">
        <label><b>Uplaod Your CV</b></label> 
        <input class="form-control" type="file" name="image" required>  
    </div>
    <div class="form-group" id="git">
        <label for="url"><b>Github Account</b></label>
        <input type="url" class="form-control" name="url" placeholder="Enter your github acc" required>
    </div>
    <div class="form-group">
        <p><b>Are you Confirm:</b></p>
        <input type="radio" id="Yes" name="confirm" value="Yes">
        <label for="Yes"><b>Yes</b></label>
        <input type="radio" id="No" name="confirm" value="No">
        <label for="No"><b>No</b></label>
    </div>
    <div class="form-group">
        <div class="submit mt-5">
            <button class="btn btn-success w-100" href="#" name="submit">
                <span>Submit</span>
            </button>
        </div>
    </div>
    </form>
   </div> 
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
        function change() {
            const option = document.getElementById("sem")
            if (option.value == "1st") {
                document.getElementById("cv").style.display = "contents";
                document.getElementById("git").style.display = "contents";
            } 
            else if(option.value == "teach"){
                document.getElementById("cv").style.display = "none";
                document.getElementById("git").style.display = "none";
            }
            else if(option.value == "2nd"){
                document.getElementById("cv").style.display = "contents";
                document.getElementById("git").style.display = "contents";
            }
            else if(option.value == "3rd"){
                document.getElementById("cv").style.display = "contents";
                document.getElementById("git").style.display = "contents";
            }
            else if(option.value == "4th"){
                document.getElementById("cv").style.display = "contents";
                document.getElementById("git").style.display = "contents";
            }
            else{
                document.getElementById("cv").style.display = "contents";
                document.getElementById("git").style.display = "contents";
            }
        }
    </script>
</body>
</html>
