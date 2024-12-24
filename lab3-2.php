<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">



<h3 class="p1"><i class="fa-solid fa-house"></i> เพิ่มข้อมูลหนังสือ</h3>
<div class="content">
  <form action="action.php" method="post">
    <table class="table table-striped table-bordered">
      <thead>
        <th>BOOK ID</th>
        <th>BOOK TYPE</th>
      </thead>
      <tbody>
        <?php
        include "dbcon.php";
        $sql = "SELECT * FROM tbbooktype";
        $query = $conn->query($sql);
        while ($row = $query->fetch_object()) {
          ?>
          <tr>
            <th><?= $row->booktypeid ?></th>
            <th><?= $row->booktypename ?></th>
          </tr>
          <?php
        }
        ?>
      </tbody>

    </table>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">ADD BOOK NAME</label>
      <input type="text" class="form-control" name="tbookname" placeholder="ระบุชื่อหนังสือที่จะเพิ่ม...">

    </div>

    <button type="submit" name="aSubmitbook" class="btn btn-success">
      <i class="fa-solid fa-floppy-disk"></i> บันทึกข้อมูล</button>

    <button type="button" class="btn btn-warning" onclick="clearForm()">
      <i class="fa-solid fa-trash"></i> ล้างข้อมูล</button>

    <a href="home.php">
      <button type="button" class="btn btn-danger">
        <i class="fa-solid fa-arrow-left"></i> BACK</button>
    </a>

</div>