<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h3 class="p1"><i class="fa-solid fa-download"></i> BOOK</h3>
<div class="content">
    <table class="table table-striped table-bordered">
<thead>
        <th>BOOK ID</th>
        <th>BOOK NAME</th>
        <th>AUTHOR</th>
        <th>PRICE</th>
        <th>PSTOCK</th>
        <th>BOOK TYPE</th>
    </thead>
<tbody>
<?php 
include"dbcon.php";
$sql="SELECT * FROM tbbook INNER JOIN tbbooktype ON tbbook.booktypeid=tbbooktype.booktypeid";
$query=$conn->query($sql);
while($row=$query->fetch_object()){
?>
    <tr>
        <th><?=$row->bookid?></th>
        <th><?=$row->bookname?></th>
        <th><?=$row->author?></th>
        <th><?=$row->price?></th>
        <th><?=$row->stock?></th>
        <th><?=$row->booktypename?></th>
    </tr>
    <?php
}
?>
    </tbody>
</table>
<div>
        <a href="lab3-1.php">
        <button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i> ADD ROOM</button>
        echo "<META HTTP-EQUIV='refresh'CONTENT='0; URL=lab_function/lab-formlogin.php'>";
    </a></div>
</div>
</div>
<h3 class="p1"><i class="fa-solid fa-download"></i> BOOK TYPE</h3>
<div class="content">
    <table class="table table-striped table-bordered">
<thead>
        <th>BOOK ID</th>
        <th>BOOK TYPE</th>
    </thead>
<tbody>
<?php 
    include"dbcon.php";
    $sql="SELECT * FROM tbbooktype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
    <tr>
        <th><?=$row->booktypeid?></th>
        <th><?=$row->booktypename?></th>
    </tr>
    <?php
}
?>
    </tbody>
    
</table>
<div><a href="lab3-2.php"><button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i> ADD BOOK TYPE</button></a></div>