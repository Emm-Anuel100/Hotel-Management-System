<?php 
include('db_connect.php'); 

// Fetch room categories
$cat = $conn->query("SELECT * FROM room_categories");
$cat_arr = array();
while($row = $cat->fetch_assoc()){
    $cat_arr[$row['id']] = $row;
}

// Fetch rooms
$room = $conn->query("SELECT * FROM rooms");
$room_arr = array();
while($row = $room->fetch_assoc()){
    $room_arr[$row['id']] = $row;
}
?>

<div class="container-fluid">
<h4 class="refresh"><i class="fas fa-refresh"></i> Refresh</h4> <br/>


<style> 
 h4.refresh{
    cursor: pointer;
    margin-top: 20px;
    margin-left: 40px;
    font-size: 16px;
   }
	tr,th{
	text-align: center;
   }
  </style>

    <div class="col-lg-12">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>S/N</th>
                                <th>Category</th>
                                <th>Room</th>
                                <th>Reference</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php 
                                $i = 1;
                                $checked = $conn->query("SELECT * FROM checked WHERE status != 0 ORDER BY status DESC, id ASC");
                                while($row = $checked->fetch_assoc()): 

                                    // Initialize variables
                                    $category_name = '.....';
                                    $room_name = '.....';

                                    // Check if the room_id exists in $room_arr
                                    if (isset($room_arr[$row['room_id']])) {
                                        $room_info = $room_arr[$row['room_id']];
                                        // Check if category_id exists in $room_info
                                        if (isset($room_info['category_id']) && isset($cat_arr[$room_info['category_id']])) {
                                            $category_info = $cat_arr[$room_info['category_id']];
                                            $category_name = htmlspecialchars($category_info['name']);
                                        }
                                        $room_name = htmlspecialchars($room_info['room']);
                                    }
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $i++ ?></td>
                                    <td class="text-center"><?php echo $category_name ?></td>
                                    <td class=""><?php echo $room_name ?></td>
                                    <td class=""><?php echo htmlspecialchars($row['ref_no']) ?></td>
                                    <?php if($row['status'] == 1): ?>
                                        <td class="text-center"><span class="badge badge-warning">Checked-IN</span></td>
                                    <?php else: ?>
                                        <td class="text-center"><span class="badge badge-success">Checked-Out</span></td>
                                    <?php endif; ?>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-primary check_out" type="button" data-id="<?php echo htmlspecialchars($row['id']) ?>">View</button>
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
        uni_modal("Check Out", "manage_check_out.php?checkout=1&id=" + $(this).attr("data-id"));
    });

    $('#filter').submit(function(e){
        e.preventDefault();
        location.replace('index.php?page=check_in&category_id=' + $(this).find('[name="category_id"]').val() + '&status=' + $(this).find('[name="status"]').val());
    });

    // $('.refresh').click(function(){
    //     window.location.reload();
    // });
   });
    // $('table').dataTable();
    // $('.check_out').click(function(){
    //     uni_modal("Check Out", "manage_check_out.php?checkout=1&id=" + $(this).attr("data-id"));
    // });
    // $('#filter').submit(function(e){
    //     e.preventDefault();
    //     location.replace('index.php?page=check_in&category_id=' + $(this).find('[name="category_id"]').val() + '&status=' + $(this).find('[name="status"]').val());
    // });

    // $('.refresh').click(function(){
	// 	window.location.reload();
	// })
</script>
