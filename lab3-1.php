<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h3 class="p1"><i class="fa-solid fa-house"></i> เพิ่มข้อมูลหนังสือ</h3>
<div class="content">
  <form action="action.php" method="post">

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">BOOK NAME</label>
      <input type="text" class="form-control" name="tbookname" placeholder="ระบุชื่อหนังสือ...">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">AUTHOR</label>
      <input type="text" class="form-control" name="tauthor" placeholder="ระบุชื่อผู้แต่ง...">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">PRICE</label>
      <input type="text" class="form-control" name="tprice" value="0">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">STOCK</label>
      <input type="text" class="form-control" name="tstock" value="0">
    </div>
    <div class="mb-3">
      <label class="exampleFormControlInput1">BOOK TYPE</label>
      <select class="form-control" name="tbooktypeid">
        <?php
        include "dbcon.php";
        $sql = "SELECT *FROM tbbooktype";
        $query = $conn->query($sql);
        while ($row = $query->fetch_object()) {
          ?>
          <option value="<?= $row->booktypeid ?>">
            <?= $row->booktypename ?>
          </option>
        <?php } ?>
      </select>
    </div>

    <div>
      <button type="submit" name="Submitbook" class="btn btn-success">
        <i class="fa-solid fa-floppy-disk"></i> บันทึกข้อมูล</button>

      <button type="button" class="btn btn-warning" onclick="clearForm()">
        <i class="fa-solid fa-trash"></i> ล้างข้อมูล</button>

      <a href="home.php">
      <button type="button" class="btn btn-danger">
        <i class="fa-solid fa-arrow-left"></i> BACK</button>

    </div>
    </a>
  </form>
</div>