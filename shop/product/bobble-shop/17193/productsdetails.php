<?php
		include_once('includes/config.php');

		$sql = "select e.id, e.firstName, e.lastName, e.managerId, e.title, e.department, e.city, e.officePhone, e.cellPhone, " .
				"e.email, e.picture, m.firstName managerFirstName, m.lastName managerLastName, count(r.id) reportCount " . 
				"from employee e left join employee r on r.managerId = e.id left join employee m on e.managerId = m.id " .
				"where e.id=:id group by e.lastName order by e.lastName, e.firstName";
				
		$sqll = "select p.id, p.product_name, p.product_price, p.product_quantity, p.big_pic_url from product as p left join product r on r.id = p.id left join product m on p.id = m.id	where p.id=:id group by p.product_name order by p.id";
		try {
			$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $dbh->prepare($sqll);  
			$stmt->bindParam('id', $_GET['id']);
			$stmt->execute();
			$product = $stmt->fetchObject();  
			$dbh = null;
		?>
		<div class="guides-details">
	    <h3><?php echo "$product->product_name" ?></h3>
       			
   			</div>
	 
    		<ul data-role="listview" data-inset="true" class="action-list">
		    	<?php
	    		
		    	//the guides details begin here
				if (!is_null($product->product_price))
		    	{
					echo "<li>$product->product_price</li>";
				}
		    	if (!is_null($product->product_quantity))
		    	{
					echo "<li>$product->product_quantity</li>";
				}
		    	if (!is_null($product->big_pic_url))
		    	{
					echo "<li>$product->big_pic_url</li>";
					//<li><a href="mailto:jdoe@foo.com">Basic email: mailto:jdoe@foo.com</a></li>
				}
				if (!is_null($product->id))
		    	{
					echo "<li><a href='http://localhost/kibera/pages/donate.php'><h3>Donate</h3></a></li>";
				}
		    	?>
    		</ul>
		
		<?php	
		} catch(PDOException $e) {
			echo $e->getMessage(); 
		}
?>
