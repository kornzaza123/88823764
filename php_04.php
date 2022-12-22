<form>
<input name = "Start" type = "text" 
    value = " <?php echo isset($_POST['Start']) ? intval($_POST['Start']) : 0; ?>">
    <input name = "End" teyp = "text"
    value = " <?php echo isset($_POST['End']) ? intval($_POST['End']) : 0; ?>">
    <button type = "Submit">Submit</button>
</form>

<?php
$S = isset($_POST['Start']) ? intval($_POST['Start']) : 0;
$E = isset($_POST['End']) ? intval($_POST['End']) : 0;

for($i = $S;$i <= $E;$i++){
    ?>

<?php if($i%2 == 0){
        echo "$i" . " ";
    }
?>
<?php } ?>