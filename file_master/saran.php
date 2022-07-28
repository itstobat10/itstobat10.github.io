<!DOCTYPE html>
<html>
<head>
saran	
</head>
<body>
	<?php
	require_once("../rute/config.php");
	?>
		<table>
			<thead>
				<tr> 
					<th>#</th>
					<th>saran</th>
				</tr>
			</thead>
		 <tbody>
			<?php
				$get = mysqli_query($conn, "SELECT * FROM tb_saran ORDER BY id_saran");
				$i = 1;
					while ($set=mysqli_fetch_array($get)) {
					?>
							<tr>
								<td><?php echo $i;?></td>
								<td><?php echo $set['saran'];?></td>
							</tr>
					<?php
						$i++;
					}
					?>
			
			</tbody>
		</table>
			
		</div>
		
	</div>
</div>
</body>
</html>