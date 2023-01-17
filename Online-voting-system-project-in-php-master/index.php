<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>

<div class="divi">
<p><center><font color='black' size='20' >This system allows all registered users to vote for their favorite POLITICAL PARTY.</font></p><br>
<p><font color='black' size="5">In order to make a vote you have to register first and then login.</font></center></p>

</div>
    <p>&nbsp;&nbsp;</p>
<?php include "footer.php";?>
