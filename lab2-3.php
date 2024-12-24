<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h3 class="p1"><i class="fa-solid fa-download"></i> ทดสอบดึงข้อมูล</h3>
<div class="content">
    <table class="table table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>DETAIL</th>
        <th>TYPE</th>
    </thead>
    <tbody>
<?php 
    include"dbcon.php";
    $sql="SELECT * FROM tbroom";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>


    <tr>
        <th><?=$row->roomid?></th>
        <th><?=$row->roomname?></th>
        <th><?=$row->detail?></th>
        <th><?=$row->roomtypeid?></th>
    </tr>
<?php
}
?>
</tbody>
    </table>
    <div>
        <a href="lab2-4.php">
        <button type="button" class="btn btn-primary"><i class="fa-solid fa-arrow-right"></i> ADD ROOM</button>
    </a></div>
</div>
<h3 class="p1"><i class="fa-solid fa-download"></i> ทดสอบดึงข้อมูล-tbroomtype</h3>
<div class="content">
    <table class="table table-striped table-bordered">
<thead>
        <th>ID</th>
        <th>NAME</th>
        <th>price</th>
    </thead>
<tbody>
<?php 
    include"dbcon.php";
    $sql="SELECT * FROM tbroomtype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
    <tr>
        <th><?=$row->roomtypeid?></th>
        <th><?=$row->roomtypename?></th>
        <th><?=$row->price?></th>
    </tr>
    <?php
}
?>
    </tbody>
</table>
</div>
<h3 class="p1"><i class="fa-solid fa-magnifying-glass"></i> ตรวจสอบราคาของแต่ละห้อง</h3>
<div class="content">
    <table class="table table-striped table-bordered">
<thead>
        <th>ID</th>
        <th>NAME</th>
        <th>price</th>
    </thead>
<tbody>
<?php 
    include"dbcon.php";
    $sql="SELECT * FROM tbroom INNER JOIN tbroomtype ON tbroom.roomtypeid=tbroomtype.roomtypeid";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
    <tr>
        <th><?=$row->roomname?></th>
        <th><?=$row->roomtypename?></th>
        <th><?=$row->price?></th>
    </tr>
    <?php
}
?>
    </tbody>
</table>
</div>