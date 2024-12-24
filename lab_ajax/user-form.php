<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--====form section start====-->
<h2 class="p1"><i class="fa-solid fa-magnifying-glass"></i> Insert User Data</h2>
<div class="content">
    <p id="msg"></p>
    <form id="userForm" method="POST">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" placeholder="Enter Full Name" name="fullName" required>
        <label class="form-label">Email Address</label>
        <input type="email" class="form-control" placeholder="Enter Email Address" name="emailAddress" required>
        <label class="form-label">City</label>
        <input type="city" class="form-control" placeholder="Enter Full City" name="city" required>
        <label class="form-label">Country</label>
        <input type="text" class="form-control" placeholder="Enter Full Country" name="country" required>
        <div>
            <button type="submit" class="btn btn-success" style="margin-top: 20px;">
                <i class="fa-solid fa-floppy-disk"></i> บันทึก
            </button>
        </div>
    </form>
</div>
<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>
</body>
</html>

<h2 class="p1"><i class="fa-solid fa-magnifying-glass"></i> user form</h2>
<div class="content">
    <table class="table table-dark table-striped table-bordered table-hover">
        <thead>
            <th>id</th>
            <th>fullName</th>
            <th>emailAddress</th>
            <th>city</th>
            <th>country</th>
            <th>created_at</th>
        </thead>
    <tbody>
<?php
    include"database.php";
    $sql="SELECT * FROM usertable";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->id?></td>
            <td><?=$row->fullName?></td>
            <td><?=$row->emailAddress?></td>
            <td><?=$row->city?></td>
            <td><?=$row->country?></td>
            <td><?=$row->created_at?></td>
        </tr>
<?php
    }
?>
    </tbody>
</table>
</div>