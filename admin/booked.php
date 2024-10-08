
<?php include('db_connect.php'); 

$cat = $conn->query("SELECT * FROM room_categories");
$cat_arr = array();
while($row = $cat->fetch_assoc()){
	$cat_arr[$row['id']] = $row;
}
$room = $conn->query("SELECT * FROM rooms");
$room_arr = array();
while($row = $room->fetch_assoc()){
	$room_arr[$row['id']] = $row;
}
?>

  <style>
	h4.refresh{
		cursor: pointer;
		margin-top: 20px;
		margin-left: 40px;
		font-size: 16px;
	}

	.btn-filter{
		width: 10rem;
	}

	tr,th{
		text-align: center;
	}
  </style>
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="row mt-3">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered">
							<thead>
								<th>S/N</th>
								<th>Category</th>
								<th>Reference</th>
								<th>Email</th>
								<th>Status</th>
								<th>Action</th>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								// $checked = $conn->query("SELECT * FROM checked where status = 0 order by status desc, id asc");
								$checked = $conn->query("SELECT * FROM checked WHERE status = 0 ORDER BY status DESC, id DESC");
								while($row=$checked->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="text-center"><?php echo $cat_arr[$row['booked_cid']]['name'] ?></td>
									<td class=""><?php echo $row['ref_no'] ?></td>
									<td class=""><?php echo $row['email'] ?></td>
									<td class="text-center"><span class="badge badge-warning">Booked</span></td>
									<td class="text-center">
									 <button class="btn btn-sm btn-primary check_out" type="button" data-id="<?php echo $row['id'] ?>">View</button>
									</td>
								</tr>
							<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
    $('table').dataTable();

    // Use event delegation for dynamically generated elements
    $(document).on('click', '.check_out', function() {
        uni_modal("Check Out", "manage_booked.php?checkout=1&id=" + $(this).attr("data-id"));
    });

    $('#filter').submit(function(e) {
        e.preventDefault();
        location.replace('index.php?page=check_in&category_id=' + $(this).find('[name="category_id"]').val() + '&status=' + $(this).find('[name="status"]').val());
    });
});

</script>