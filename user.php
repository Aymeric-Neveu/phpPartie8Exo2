<?php
session_start();
?>
<p>
<?php
echo 'Lastname : ' . ' ' .$_SESSION['lastname'];
?>
</p>
<p>
<?php
echo 'Name : ' . ' ' . $_SESSION['name'];
?>
</p>
<p>
  <?php
   echo 'Age : ' . ' ' . $_SESSION['age'];
   ?>
</p>
