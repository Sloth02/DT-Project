<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h3 class="p1"><i class="fa-solid fa-house"></i> Register</h3>
<div class="content">
  <form action="../action.php" method="post">

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">FIRSTNAME</label>
      <input type="text" class="form-control" name="firstname" placeholder="โปรดระบุชื่อ..." required>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">LASTNAME</label>
      <input type="text" class="form-control" name="lastname" placeholder="โปรดระบุนามสกุล..." required>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">USERNAME</label>
      <input type="text" class="form-control" name="username" placeholder=" * โปรดระบุ Username..." required>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">PASSWORD</label>
      <input type="password" class="form-control" name="password" placeholder=" * โปรดระบุ password..." required>
    </div>

    <div>
      <button type="submit" name="Savepassword" class="btn btn-success">
        <i class="fa-solid fa-floppy-disk"></i> บันทึกข้อมูล</button>

      <button type="button" class="btn btn-warning" onclick="clearForm()">
        <i class="fa-solid fa-trash"></i> ล้างข้อมูล</button>

      <a href="home.php"><button type="button" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> BACK</button></a>
    </div>
  </form>
</div>