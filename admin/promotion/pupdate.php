<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include("../../config/setting.php"); ?>

<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql="select * from promosi where id=".$_GET['id']; 
    if ($result=$virtual_con->query($sql)){
       
        $row=$result->fetch_assoc();
        $id=$row['id'];
        $picture=$row['picture'];
        $title=$row['title'];
        $urlpic=$row['picture'];
        $fblink=$row['fblink'];;
        $xlink=$row['xlink'];
        $email=$row['email'];
        $soon=$row['soon'];
        $statusdate=$row['statusdate'];
    }
}

 if(isset($_GET['picture'])){
    $sql = "UPDATE promosi SET 
    picture = '".$_GET['picture']."',
    title = '".$_GET['title']."',
    fblink = '".$_GET['fblink']."',
    xlink = '".$_GET['xlink']."',
    email = '".$_GET['email']."',
    soon = '".$_GET['soon']."',
    statusdate = '".$_GET['statusdate']."'
    WHERE id=".$_GET['id'];
    

    if($virtual_con->query($sql)){
        goto2("../promotion.php", "Update Record  Succesfully");
    }else{
        goto2("../promotion.php","Error Updating ");
    }
 }
 else {

?>

<form method="GET" action="pnew.php">
<input id="id" value="<?php echo $id;?>" 
    name="id" type="hidden" class="form-control">

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Picture</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" value="<?php echo $picture;?>" name="picture" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Title</label> 
    <div class="col-8">
      <input id="text1" value="<?php echo $title;?>" name="title" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Facebook Links</label> 
    <div class="col-8">
      <input id="text2" value="<?php echo $fblink;?>" name="fblink" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Twitter Link</label> 
    <div class="col-8">
      <input id="text3" value="<?php echo $xlink;?>" name="xlink" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text4" value="<?php echo $email;?>" name="email" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text5" class="col-4 col-form-label">Coming Soon Title</label> 
    <div class="col-8">
      <input id="text5" value="<?php echo $soon;?>" name="soon" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text6" class="col-4 col-form-label">Status Date</label> 
    <div class="col-8">
      <input id="text6" value="<?php echo $statusdate;?>" name="statusdate" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php } ?>