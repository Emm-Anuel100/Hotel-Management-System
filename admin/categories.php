<?php 

include('db_connect.php');
?>



<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="#" id="manage-category">
				<div class="card">
					<div class="card-header">
						Add Room Category
				  	</div>
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Name:</label>
								<input type="text" class="form-control" name="name">
							</div>
							<div class="form-group">
								<label class="control-label">Price:</label>
								<input type="number" class="form-control text-right" name="price" step="1" min="1">
							</div>
							<div class="form-group">
								<label class="control-label">Capacity (max.)</label>
								<input type="number" class="form-control text-right" name="capacity" step="1" min="1">
							</div>
							<div class="form-group">
								<label class="control-label">Services (seperate with comas)</label>
								<textarea class="form-control text-right" name="services" style="min-height: 100px; max-height: 200px;"></textarea>
							</div>
							<div class="form-group">
								<label for="" class="control-label">Image:</label>
								<input type="file" class="form-control" name="img" onchange="displayImg(this,$(this))" accept=".jpg, .png, .jpeg">
							</div>
							<div class="form-group">
								<img src="<?php echo isset($image_path) ? '../assets/img/'.$cover_img :'' ?>" alt="" id="cimg">
							</div>
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12" style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap">
								<button class="btn btn-primary">Add</button>
								<button class="btn btn-danger" type="button" onclick="$('#manage-category').get(0).reset()"> Clear</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">S/N</th>
									<th class="text-center">Image</th>
									<th class="text-center">Category</th>
									<th class="text-center">Price (&#8358;)</th>
									<th class="text-center">Capacity</th>
									<th class="text-center">Services</th>
									<!-- <th class="text-center">Action</th> -->
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$cats = $conn->query("SELECT * FROM room_categories order by id asc");
								while($row=$cats->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
								
									<td class="text-center">
										<img src="<?php echo isset($row['cover_img']) ? '../assets/img/'.$row['cover_img'] :'' ?>" alt="room category image" id="cimg">
									</td>
									<td class="">
										<p> <?php echo $row['name'] ?></p>
									</td>
									<td class="">
										<p>
									    <form action="http://localhost/hotel-ui/admin/index.php?page=categories" method="POST">
											<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
											<input type="number" name="category_price" placeholder="<?php echo number_format($row['price']) ?>" style="width: 8rem; border: 1px solid #DDE0E3; outline: none" min="1" required> <br>
											<input type="submit" value="update" class="btn btn-primary mt-2" style="width: 130px; background: #75ADE5; border: none;">
										  </form>
										</p>
									</td>
									<td class="">
										<p><?php echo number_format($row['capacity']) ?></p>
									</td>
									<td class="">
									<p>
									<form action="http://localhost/hotel-ui/admin/index.php?page=categories" method="POST">
										<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
										<input type="text" name="category_services" placeholder="<?php echo ($row['services']) ?>" style="width: 8rem; border: 1px solid #DDE0E3; outline: none" min="1" required> <br>
										<input type="submit" value="update" class="btn btn-primary mt-2" style="width: 130px; background: #75ADE5; border: none; color: #fff">
									</form>	
									</p>
									</td>
									<!-- <td class="text-center">
										<button class="btn btn-sm btn-primary edit_cat" type="button" data-id="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>" data-price="<?php echo $row['price'] ?>" data-cover_img="<?php echo $row['cover_img'] ?>">Edit price</button>
										<button class="btn btn-sm btn-danger delete_cat" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td> -->
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	
</div>

<style>
	img#cimg,
	.cimg{
		max-height: 10vh;
		max-width: 6vw;
	}
	td{
		vertical-align: middle !important;
		text-align: center;
	}
</style>



<!-- PHP script for data updates -->
<?php
//** if category price value is set */
if (isset($_POST['category_price'])) {
  
	// Get the new price from the form
	$new_price = mysqli_real_escape_string($conn, $_POST['category_price']);
	$id = isset($_POST['id']) ? intval($_POST['id']) : 0; // Get the id from the form

	// Ensure $new_price is a valid number and $id is valid
	if (is_numeric($new_price) && $new_price > 0) {
		 // Update the price column in the database
		 $sql = "UPDATE room_categories SET price = ? WHERE id = ?";

		 // Prepare the statement to prevent SQL injection
		 $stmt = $conn->prepare($sql);
		 $stmt->bind_param("ii", $new_price, $id); 

		 // Execute the statement
		 if ($stmt->execute()) {
			//   echo "Price updated successfully!";
			echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Price updated successfully!',
                    confirmButtonText: 'OK'
                   }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'http://localhost/hotel-ui/admin/index.php?page=categories'; 
                    }
                });
            </script>";
		 } else {
			echo "<script>
			Swal.fire({
				 icon: 'error',
				 title: 'Error!',
				 text: 'There was an error updating the price.',
				 confirmButtonText: 'OK'
			});
	     </script>";
		 }

		// Close the statement
      $stmt->close();
	  } else {
		echo "<script>
		Swal.fire({
			 icon: 'warning',
			 title: 'Invalid Input',
			 text: 'Please enter a valid price greater than 0.',
			 confirmButtonText: 'OK'
		});
     </script>";
	}
}	


//** Script to updating of services */
//** if services data is set */
if (isset($_POST['category_services'])) {
  
	// Get the new services from the form
	$new_services = mysqli_real_escape_string($conn, $_POST['category_services']);
	$id = isset($_POST['id']) ? intval($_POST['id']) : 0; // Get the id from the form

	// Ensure $new_services is valid 
	if ($new_services) {
		 // Update the services column in the database
		 $sql = "UPDATE room_categories SET services = ? WHERE id = ?";

		 // Prepare the statement to prevent SQL injection
		 $stmt = $conn->prepare($sql);
		 $stmt->bind_param("si", $new_services, $id); 

		 // Execute the statement
		 if ($stmt->execute()) {
			//   echo "Services updated successfully!";
			echo "<script>
			Swal.fire({
				 icon: 'success',
				 title: 'Success!',
				 text: 'Services updated successfully!',
				 confirmButtonText: 'OK'
				}).then((result) => {
				 if (result.isConfirmed) {
					  window.location.href = 'http://localhost/hotel-ui/admin/index.php?page=categories'; 
				 }
			});
	   </script>";
		 } else {
			echo "<script>
			Swal.fire({
				 icon: 'error',
				 title: 'Error!',
				 text: 'There was an error updating services.',
				 confirmButtonText: 'OK'
			});
	     </script>";
		 }

		// Close the statement
      $stmt->close();
	  } else {
		echo "<script>
		Swal.fire({
			 icon: 'warning',
			 title: 'Invalid Input',
			 text: 'Please enter a valid data ',
			 confirmButtonText: 'OK'
		});
     </script>";
	}
}	

?>
<!--/ PHP script for data updates -->



<script>
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$('#manage-category').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_category',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully added",'success')
					setTimeout(function(){
						location.reload()
					},5000)

				}
				else if(resp==2){
					alert_toast("Data successfully updated",'success')
					setTimeout(function(){
						location.reload()
					},5000)

				}
			}
		})
	})
	$('.edit_cat').click(function(){
		start_load()
		var cat = $('#manage-category')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='name']").val($(this).attr('data-name'))
		cat.find("[name='price']").val($(this).attr('data-price'))
		cat.find("#cimg").attr('src','../assets/img/'+$(this).attr('data-cover_img'))
		end_load()
	})
	$('.delete_cat').click(function(){
		_conf("Are you sure to delete this category?","delete_cat",[$(this).attr('data-id')])
	})
	function delete_cat($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_category',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>