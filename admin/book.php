<?php 
include('db_connect.php');

 $rid = '';

 $calc_days = abs(strtotime($_GET['out']) - strtotime($_GET['in'])) ; 
 $calc_days = floor($calc_days / (60*60*24)  );
?>

<!---*** room booked notification ***--->
<div id="alert-toast" class="alert-toast"></div>
<style>
    .alert-toast {
        position: fixed;
        top: 20px; 
        right: 20px; 
        z-index: 9999; 
        display: none; 
        background-color: blue;
        color: #fff;
        padding: 15px;
        border-radius: 5px;
        font-size: 16px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }
</style>


<div id="alert-toast" class="alert-toast"></div>

<div class="container-fluid">
	
	<form action="" id="manage-check">
		<input type="hidden" name="cid" value="<?php echo isset($_GET['cid']) ? $_GET['cid']: '' ?>">
		<input type="hidden" name="rid" value="<?php echo isset($_GET['rid']) ? $_GET['rid']: '' ?>">


		<div class="form-group">
			<label for="name">Fullname:</label>
			<input type="text" name="name" id="name" class="form-control" value="<?php echo isset($meta['name']) ? $meta['name']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="contact">Phone:</label>
			<input type="text" name="contact" id="contact" class="form-control" value="<?php echo isset($meta['contact_no']) ? $meta['contact_no']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="date_in">Check-in Date:</label>
			<input type="date" name="date_in" id="date_in" class="form-control" value="<?php echo isset($_GET['in']) ? date("Y-m-d",strtotime($_GET['in'])): date("Y-m-d") ?>" required readonly>
		</div>
		<div class="form-group">
			<label for="date_in_time">Check-in Time:</label>
			<input type="time" name="date_in_time" id="date_in_time" class="form-control" value="<?php echo isset($_GET['date_in']) ? date("H:i",strtotime($_GET['date_in'])): date("H:i") ?>" required>
		</div>
		<div class="form-group">
			<label for="days">Days of Stay:</label>
			<input type="number" min ="1" name="days" id="days" class="form-control" value="<?php echo isset($_GET['in']) ? $calc_days: 1 ?>" required readonly>
		</div>
	</form>
</div>

<script>
	function alert_toast(message, type) {
    var toast = $('#alert-toast');
    toast.text(message);
    toast.removeClass('success error'); // Remove previous type classes
    toast.addClass(type); // Add the new type class
    toast.fadeIn().delay(8000).fadeOut(); // Show for 8 seconds
    }

	$('#manage-check').submit(function(e){
    e.preventDefault();
    start_load();
    $.ajax({
        url: 'admin/ajax.php?action=save_book',
        method: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            var resp = JSON.parse(response);
            if (resp.id > 0) {
                alert_toast("Room booked your reference No: " + resp.ref_no, 'success');
                setTimeout(function(){
                    end_load();
                    $('.modal').modal('hide');
                }, 8000); /// display fro 8 seconds
            }
        }
    });
});

// $('#manage-check').submit(function(e){
// 	e.preventDefault();
// 	start_load()
// 	$.ajax({
// 		url:'admin/ajax.php?action=save_book',
// 		method:'POST',
// 		data:$(this).serialize(),
// 		success:function(resp){
// 			if(resp >0){
// 				alert_toast("Room booked sucessfully!",'success')
// 				setTimeout(function(){
// 				end_load()
// 				$('.modal').modal('hide')
// 				},1500)
// 			}
// 		}
// 	})
// })
</script>