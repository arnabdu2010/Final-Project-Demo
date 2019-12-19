<style>
td{
	padding : 10px;
}
</style>

<?php
     $db =mysqli_connect("localhost","root","","webtech");
	 $sql = "SELECT * FROM users where type='customer'";
	 
	 $data =mysqli_query($db,$sql);
	 $total =mysqli_num_rows($data);
	 
	 if($total!=0){
		 
		 ?>
		 <table>
		    <tr>
			  <th> uid </th>
			  <th> hid </th>
			  <th> username </th>
			  <th> password </th>
			  <th> email </th>
			  <th> dob </th>
			  <th> type </th>
			  </tr>
			  
			  <?php
			      while($result=mysqli_fetch_assoc($data)){
					  
					  echo "<tr>
				            <td> ".$result['uid']."</td>
				            <td> ".$result['hid']."</td>
				            <td> ".$result['username']."</td>
				            <td> ".$result['password']."</td>
				            <td> ".$result['email']."</td>
				            <td> ".$result['dob']."</td>
				            <td> ".$result['type']."</td>
							</tr>";
				  }
	 }
				  else{
                     echo "no data found";
				  }
 ?>
</table> 
			  
			    
	 
