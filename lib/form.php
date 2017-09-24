<?php include lib/data-functions.php;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Very Important Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
    body{
        font-family: Gill Sans;
    }
    h1{
        color: orange;
    }
    </style>
</head>
<body>

<?php
if ($_POST){
    $errors = array();
    if(empty($_POST ['name'])){
        $errors[] = 'missing name';
    }
    if (empty($_POST['email'])){
        $errors[] = 'missing email';
    }
    if (empty($_POST['date'])){
        $errors[] = 'missing date of birth';
    }
    if (empty($_POST['radio1'])){
        $errors[] = 'information missing ';
    }
    if (empty($_POST['radio2'])){
        $errors[] = 'information missing ';
    }
    if (empty($_POST['radio'])){
        $errors[] = 'please rate your obsession! ';
    }
    if (empty($_POST['checkbox'])){
        $errors[] = 'please select your favorite meal ';
    }
    if (empty($_POST['option'])){
        $errors[] = 'please select your favorite food ';
    }

    if (empty($errors)) {
        //savedata()
        header('Location:form.php?status=ok');
        exit;
    }
    else {
        foreach($errors as $error){
            echo $error;
            echo '<br>';
        }
    }
}
$food = [];
foreach ($_POST as $key =>$value) {
$food = [$key => $value];
}


    
?>

<div class="container">
<div class="row">
<div class="col-8 mt-3">

<h1>How Much Do you Like Food?</h1>
<p>You are what you eat!</p>


<form action="form.php" method="post">
  <div class="form-group">
  <label for="exampleFormControlInput1">First name</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Type your name here">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    <label for="exampleFormControlInput1">Date of Birth</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" >
  </div>
  <label for="exampleFormControlInput1">Do you like food?</label>
  <label class="custom-control custom-radio">
  <input id="radio1" name="radio" type="radio" class="custom-control-input">
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description">Yes!!</span>
</label>
<label class="custom-control custom-radio">
  <input id="radio2" name="radio" type="radio" class="custom-control-input">
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description">No!!</span>
</label>
  <div class="form-group">
    <label for="exampleFormControlSelect1">From 1 to 5 (5 being the highest!)<br> Please select how much are you obsessed with food?<br></label>
    <input type="radio" name="rate" value="1"> 1
  <input type="radio" name="rate" value="2"> 2
  <input type="radio" name="rate" value="3"> 3
  <input type="radio" name="rate" value="3"> 4
  <input type="radio" name="rate" value="3"> 5
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"> What is your favorite meal of the day?<br></label>
    <br>
  <input type="checkbox" name="rate" value="breakfast"> Breakfast
  <input type="checkbox" name="rate" value="lunch"> Lunch
  <input type="checkbox" name="rate" value="dinner"> Dinner
  <input type="checkbox" name="rate" value="snack"> Midnight Snacking
  <input type="checkbox" name="rate" value="ridiculous"> I don't like to eat!!
  </div>

  <div class="form-group">
  <label for="exampleFormControlSelect1"> What is your favorite food of all time?<br></label>
  <select class="custom-select" name="option">
  <option value="1">Pizza</option>
  <option value="2">Hamburger</option>
  <option value="3">Pasta</option>
  <option value="4">Risotto</option>
  <option value="5">Salad</option>
  <option value="6">Steak</option>
  <option value="7">Quinoa</option>
  <option value="8">Mac&Cheese</option>
  <option value="9">Cheese</option>
  <option value="10">Beer</option>
  <option value="11">Raw Foods</option>
  <option value="12">Veggie Casserole</option>
  <option value="13">Mousakka</option>
  <option value="14">Cig Kofte</option>
  <option value="15">Kısır</option>
  <option value="16">Cigarettes</option>
  <option value="17">I only drink coffee!!</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Any comments?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <input type="submit" name="submit">
</form>
</div>
<div class="col-4">
<img class= "image-fluid" src="waffle.png" width="500px" alt="">
</div>



</div>
</div>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>