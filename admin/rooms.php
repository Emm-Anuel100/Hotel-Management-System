<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- Form Panel -->
			<div class="col-md-4">
			<form action="" id="manage-room">
				<div class="card">
					<div class="card-header">
						Add Room 
				  	</div>
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Name:</label>
								<input type="text" class="form-control" name="room">
							</div>
							<div class="form-group">
								<label class="control-label">Category:</label>
								<select class="custom-select browser-default" name="category_id">
									<?php 
									$cat = $conn->query("SELECT * FROM room_categories ORDER BY name ASC");
									while($row= $cat->fetch_assoc()) {
										$cat_name[$row['id']] = $row['name'];
										?>
										<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="" class="control-label">Availability:</label>
								<select class="custom-select browser-default" name="status">
									<option value="0">Available</option>
									<option value="1">Unavailable</option>
								</select>
							</div>
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12" style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap">
							<button class="btn btn-primary" style="width: 6rem;">Add</button>
                     <button class="btn btn-danger" type="button" onclick="$('#manage-room').get(0).reset()" style="width: 6rem;"> Clear</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- Form Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">S/N</th>
									<th class="text-center">Category</th>
									<th class="text-center">Room</th>
									<th class="text-center">Status</th>
									<!-- <th class="text-center">Action</th> -->
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$rooms = $conn->query("SELECT * FROM rooms order by id asc");
								while($row=$rooms->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>

									<td class="text-center"><?php echo $cat_name[$row['category_id']] ?></td>
									<td class="text-center"><?php echo $row['room'] ?></td>
									<?php if($row['status'] == 0): ?>
										<td class="text-center"><span class="badge badge-success">Available</span></td>
									<?php else: ?>
										<td class="text-center"><span class="badge badge-default">Unavailable</span></td>
									<?php endif; ?>
									<!-- <td class="text-center">
										<button class="btn btn-sm btn-primary edit_cat" type="button" data-id="<?php echo $row['id'] ?>" data-room="<?php echo $row['room'] ?>" data-category_id="<?php echo $row['category_id'] ?>" data-status="<?php echo $row['status'] ?>">Edit</button> 
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
.colored-toast .swal2-timer-progress-bar {
  background-color: blue !important; /* Set the progress bar color to blue */
}
</style>

<script>
	  $('#manage-room').submit(function(e){
    e.preventDefault(); // Prevent default form submission

    // Get the value of the room name input
    let roomName = $('input[name="room"]').val();

    // Check if the room name is empty
    if(roomName === ''){
      // Trigger SweetAlert if the room name is empty
		Swal.fire({
		toast: true,
		position: 'top-end',
		icon: 'error',
		title: 'Room name cannot be empty!',
		showConfirmButton: false,
		timer: 3000,
		timerProgressBar: true,
		customClass: {
			popup: 'colored-toast' // Add a custom class to style the toast
		},
		didOpen: (toast) => {
			toast.addEventListener('mouseenter', Swal.stopTimer)
			toast.addEventListener('mouseleave', Swal.resumeTimer)
		}
		});

    } else {
      // If validation passes, proceed with the AJAX request
      start_load();
      $.ajax({
        url: 'ajax.php?action=save_room',
        method: "POST",
        data: $(this).serialize(),
        success: function(resp) {
          if (resp == 1) {
            alert_toast("Data successfully added", 'success');
            setTimeout(function() {
              location.reload();
            }, 1500);
          } else if (resp == 2) {
            alert_toast("Data successfully updated", 'success');
            setTimeout(function() {
              location.reload();
            }, 1500);
          }
        }
      });
    }
  });


	$('.edit_cat').click(function(){
		start_load()
		var cat = $('#manage-room')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='room']").val($(this).attr('data-room'))
		cat.find("[name='category_id']").val($(this).attr('data-category_id'))
		cat.find("[name='status']").val($(this).attr('data-status'))
		end_load()
	})
	$('.delete_cat').click(function(){
		_conf("Are you sure to delete this room?","delete_cat",[$(this).attr('data-id')])
	})
	function delete_cat($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_room',
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