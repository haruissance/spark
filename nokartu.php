<?php
    error_reporting(0);
    include "koneksi.php";

    $sql = mysqli_query($konek, "select * from tmprfid");
    $data = mysqli_fetch_array($sql);

    $cardUID = $data['cardUID'];

?>

<div class="form-group1">
    <input type="text" name="cardUID" id="cardUID" placeholder = "Tap RFID Card" value="<?php echo $cardUID; ?>">
</div>