<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3><font size='5'>Make a Vote</font> </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='10'> What is your favorite political party? <BR><br>
<input type="radio" name="lan" value="BJP">  BJP    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/1/1e/Bharatiya_Janata_Party_logo.svg/1200px-Bharatiya_Janata_Party_logo.svg.png" width="40px"> <br>
<input type="radio" name="lan" value="CONGRESS">CONGRESS    <img src="https://yt3.ggpht.com/ytc/AAUvwnjFaqcOAbS1RKTTfD4sZ71sBaFABA-XuI9Ju_ijCw=s900-c-k-c0x00ffffff-no-rj" width="40px"><BR>
<input type="radio" name="lan" value="AAP">   AAP     <img src="https://img.etimg.com/thumb/width-640,height-480,imgsize-94513,resizemode-1,msid-67621305/news/politics-and-nation/aap-not-to-contest-lok-sabha-polls-in-maharashtra-mumbai/aap-agencies.jpg" width="40px"><BR>
<input type="radio" name="lan" value="NOTA">  NOTA   <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/NOTA_Option_Logo.png" width="40px"><BR>
<input type="radio" name="lan" value="NIRDLIYA">  NIRDLIYA  <img src="https://i.pinimg.com/originals/5a/76/4e/5a764e1ec61b41b0dd664b00bfc1fcc3.jpg" width="40px"><BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
