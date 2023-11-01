<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include("../../config/setting.php"); ?>

<?php 
 if(isset($_GET['picture'])){
    $sql="insert into 
    promosi(picture,title,fblink,xlink,email,soon,statusdate)
    value('".$_GET['picture'].
    "','".$_GET['title'].
    "','".$_GET['fblink'].
    "','".$_GET['xlink'].
    "','".$_GET['email'].
    "','".$_GET['soon'].
    "','".$_GET['statusdate'].
    "')";
    

    if($virtual_con->query($sql)){
        goto2("../promotion.php", "New Record  Succesfully Insert");
    }else{
        goto2("../promotion.php","Error inserting ");
    }
 }
 else {

?>

<form method="GET" action="pnew.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Picture</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="picture" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Title</label> 
    <div class="col-8">
      <input id="text1" name="title" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Facebook Links</label> 
    <div class="col-8">
      <input id="text2" name="fblink" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Twitter Link</label> 
    <div class="col-8">
      <input id="text3" name="xlink" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text4" name="email" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text5" class="col-4 col-form-label">Coming Soon Title</label> 
    <div class="col-8">
      <input id="text5" name="soon" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text6" class="col-4 col-form-label">Status Date</label> 
    <div class="col-8">
      <input id="text6" name="statusdate" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php } ?>