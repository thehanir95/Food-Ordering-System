<div class="tab-content" id="myTabContent">
	   <div class="tab-pane fade" id="viewitem" role="tabpanel" aria-labelledby="home-tab">
			<div class="container"> 
		<table border="1" bordercolor="#F0F0F0" cellpadding="20px">
		<th><center>food Cabin Name</center></th>
		<th><center>food Image</center></th>
		<th><center>food name</center></th>
		<th><center>food Price</center></th>
		<th><center>food cuisines</center></th>
		<th><center>Order</center></th>

<tbody>
<?php
$quer_res=mysqli_query($con,"select * from tblfood");
while($roww=mysqli_fetch_array($quer_res))
					{   
                        
                        $qrr=mysqli_fetch_array($qr);

                         ?>
					
		   <tr> 
		   <td><?php echo $res['fld_name']; ?></td>
	        <td><img src="<?php echo $food_pic; ?>" height="100px" width="150px"></td>
	        <td><center><?php echo"(" .$res['foodname'].")"?></center></td>     
            <td><center>Rs.<?php echo $res['cost']; ?></center></td> 
			<td><?php echo $res['cuisines']; ?></td>
			<td>
			<form method="post">
			<button type="submit" name="addtocart" value="<?php echo $res['food_id'];?>"><span style="color:black;"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></button>
            </form>
			
			</td>
	        <?php
	        }
	        ?>
		   </tr>
           <tbody>
		</table>
