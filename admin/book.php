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
	
       <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']); ?>" id="manage-check">
		<input type="hidden" name="cid" value="<?php echo isset($_GET['cid']) ? $_GET['cid']: '' ?>">
		<input type="hidden" name="rid" value="<?php echo isset($_GET['rid']) ? $_GET['rid']: '' ?>">

		<div class="form-group">
			<label for="name">Fullname:</label>
			<input type="text" name="name" id="name" class="form-control" value="<?php echo isset($meta['name']) ? $meta['name']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="contact">Phone:</label>
			<input type="number" name="contact" id="contact" class="form-control" value="<?php echo isset($meta['contact_no']) ? $meta['contact_no']: '' ?>" required>
		</div>
        <div class="form-group">
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" class="form-control" value="<?php echo isset($meta['email']) ? $meta['email']: '' ?>" required>
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
function alert_toast(message, type, referenceNumber) {
Swal.fire({
    icon: type === 'success' ? 'success' : 'error',
    title: message,
    html: `
        <p>
          <b>
            Booked: Your reference code: <span id="refNo">${referenceNumber}</span>
            <button id="copyRefNo" class="swal2-confirm swal2-styled" style="background-color: black; border: none;">
                Copy
            </button>
            </b>
        </p>`,
    showConfirmButton: false,
    toast: true,
    position: 'top-end',
    didOpen: () => {
        const copyButton = document.getElementById('copyRefNo');
        copyButton.addEventListener('click', () => {
            const refNo = document.getElementById('refNo').innerText;
            navigator.clipboard.writeText(refNo).then(() => {
                Swal.fire({
                    icon: 'success',
                    title: 'Copied!',
                    toast: true,
                    position: 'top-end',
                    timer: 2000,
                    showConfirmButton: false
                });
            }).catch(err => {
                Swal.fire({
                    icon: 'error',
                    title: 'Failed to copy!',
                    toast: true,
                    position: 'top-end',
                    timer: 2000,
                    showConfirmButton: false
                });
            });
        });
    }
});
}



$('#manage-check').submit(function(e) {
    e.preventDefault();
    
    // Check for empty fields
    let emptyFields = [];
    $(this).find('input[required]').each(function() {
        if (!$(this).val()) {
            emptyFields.push($(this).attr('name'));
        }
    });

    if (emptyFields.length > 0) {
        // Show SweetAlert if there are empty fields
        Swal.fire({
            icon: 'error',
            title: 'Please fill in all required fields!',
            text: 'The following fields are empty: ' + emptyFields.join(', '),
            showConfirmButton: false,
            position: 'top-end',
            timer: 5000,
            toast: true
        });
        return; // Prevent form submission
    }

    start_load();
    $.ajax({
        url: 'admin/ajax.php?action=save_book',
        method: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            var resp = JSON.parse(response);
            if (resp.id > 0) {
                // Call alert_toast with the message and reference number
                alert_toast(" ", 'success', resp.ref_no);
                
                setTimeout(function() {
                    end_load();
                    $('.modal').modal('hide');
                }, 10); // Timing 
            }
        }
    });
});
</script>
