<?php
include("./db_connect.php");
// Query to count the number of admins and staffs
$sql = "SELECT
            SUM(CASE WHEN type = 1 THEN 1 ELSE 0 END) AS admin_count,
            SUM(CASE WHEN type = 2 THEN 1 ELSE 0 END) AS staff_count
        FROM users";

$result = $conn->query($sql);

// Initialize counts
$admin_count = 0;
$staff_count = 0;

if ($result->num_rows > 0) {
    // Fetch the result
    $row = $result->fetch_assoc();
    $admin_count = $row['admin_count'];
    $staff_count = $row['staff_count'];
}
?>

    <style>
        .custom-menu {
            z-index: 1000;
            position: absolute;
            background-color: #ffffff;
            border: 1px solid #0000001c;
            border-radius: 5px;
            padding: 8px;
            min-width: 13vw;
        }
        a.custom-menu-list {
            width: 100%;
            display: flex;
            color: #4c4b4b;
            font-weight: 600;
            font-size: 1em;
            padding: 1px 11px;
        }
        span.card-icon {
            position: absolute;
            font-size: 3em;
            bottom: .2em;
            color: #ffffff80;
        }
        .file-item {
            cursor: pointer;
        }
        a.custom-menu-list:hover, .file-item:hover, .file-item.active {
            background: #80808024;
        }
        a.custom-menu-list span.icon {
            width: 1em;
            margin-right: 5px;
        }
        .candidate {
            margin: auto;
            width: 23vw;
            padding: 0 10px;
            border-radius: 20px;
            margin-bottom: 1em;
            display: flex;
            border: 3px solid #00000008;
            background: #8080801a;
        }
        .candidate_name {
            margin: 8px;
            margin-left: 3.4em;
            margin-right: 3em;
            width: 100%;
        }
        .img-field {
            display: flex;
            height: 8vh;
            width: 4.3vw;
            padding: .3em;
            background: #80808047;
            border-radius: 50%;
            position: absolute;
            left: -.7em;
            top: -.7em;
        }
        .candidate img {
            height: 100%;
            width: 100%;
            margin: auto;
            border-radius: 50%;
        }
        .vote-field {
            position: absolute;
            right: 0;
            bottom: -.4em;
        }
        div.row {
            position: relative;
            top: 3rem;
        }
        h4.item {
            position: relative;
            left: 69px;
            top: 14px;
        }
    </style>

    <div class="containe-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card col-md-4 offset-2 bg-info float-left">
                    <div class="card-body text-white">
                        <h4 class="item">Staffs: <b><?php echo $staff_count; ?></b></h4>
                        <hr>
                        <span class="card-icon"><i class="fa fa-users"></i></span>
                    </div>
                </div>
                <div class="card col-md-4 offset-2 bg-primary ml-4 float-left">
                    <div class="card-body text-white">
                        <h4 class="item">Admin: <b><?php echo $admin_count; ?></b></h4>
                        <hr>
                        <span class="card-icon"><i class="fa fa-user-tie"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
