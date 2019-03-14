<!DOCTYPE html>
<html>
    <center>
      <h1>Profile</h1>
      <table border=1>
         <tr>
		   <th>sno</th>
		   <th>name</th>
		   <th>password</th>
		   <th>email</th>
		   <th>status</th>
		 </tr>
<?php
 include("connect.php");
   $sel="select * from  taskreg";
   $qer=mysqli_query($conn,$sel);
   //print_r($qer);
    while($row=mysqli_fetch_array($qer)){
         echo "<tr><td>".$row['sno']."</td>";
         echo "<td>".$row['name']."</td>";
         echo "<td>".$row['password']."</td>";
         echo "<td>".$row['email']."</td>";
?>
     <td>
     <a href="edit.php?id=<?php echo $row['sno'];?>">EDIT/</a>
     <a href="delete.php?id=<?php echo $row['sno'];?>">DELETE/</a>
     </td>
  </tr>
<?php
  }
?>
   </center>
  </table>
</html>