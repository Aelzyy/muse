<?php include 'header.php'; ?>
<?php
$omw = "";
$kuip = "";
$isi = "";
$error = "";
$sukxes = "";

if(isset($_POST['submit'])){
    $omw = "";
    $kuip = "";

    if($omw == '' or $kuip == ''){
        $error = "silahkan refresh";
    }

    if(empty($error)){
        $sql3 = "insert into halaman (omw,kuip) values ('$omw','$kuip')";
        $q3 = "mysqli_query($connect,$sql)";

        if($q3){
            $sukxes = "sukse masukan data";
        }else{
            $error = "Galat";
        }
    }
}
?>

<h1>halaman input data</h1>
<div class="mb-3 row">
    <a href="dashboard.php">Back</a>
</div>
<form action="" method="post">
    <div class="mb-3 row">
        <label for="omw" class="col-sm-2 col-form-label">omw</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="omw" value="<?php echo $omw?>" name="omw">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="kuip" class="col-sm-2 col-form-label">kuip</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="kuip" value="<?php echo $kuip?>" name="kuip">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="isi" class="col-sm-2 col-form-label">isi</label>
        <div class="col-sm-10">
        <textarea name="isi" class="form-control" id="summernote"><?php echo $isi?></textarea>
        </div>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
    </div>
</form>
<?php include 'footer.php'; ?>