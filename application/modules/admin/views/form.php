<!DOCTYPE html>
<html lang="en">
<head>

  <title>โปรแกรมหาจำนวนเฉพาะ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body>


<div class="container bg-grey">
<br><br>
  <h2 class="text-center set_head">โปรแกรมหาจำนวนเฉพาะ</h2>
  <br><br>
  <div class="row">
    
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="number1" name="number1" placeholder="จำนวนตั้งแต่" type="number" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="number2" name="number2" placeholder="ถึงจำนวน" type="number" required>
        </div>
      </div>
     
 <button class="btn btn-default pull-left" type="submit">ตกลง</button>
      <br>
       
    </div>
     <div class="col-sm-6 form-group pull-left">
         <div class="set_show"> ผลลัพธ์</div>
        </div>
  </div>
</div>



</body>

<style>
.set_head{
	    font-size: 41px;
    font-weight: bolder;
    letter-spacing: 4px;
}

.btn-default {
    width: 100%;
    height: 115px;
    color: #333;
    background-color: #fff;
    border-color: #ccc;
}

.set_show{
	    background-color: white;
   height: 163px;
    font-size: 25px;
    text-align: center;
    padding: 64px;
}

body{
	font-family: 'Kanit', sans-serif;
	background-color: #ccc;
	font-size: 16px;
}


</style>


</html>