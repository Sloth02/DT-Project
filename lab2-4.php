<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


<h3 class="p1"><i class="fa-solid fa-download"></i> เพิ่มข้อมูลห้องพัก</h3>
<div class="content">
    <form action="action.php" method="post">
        <div class="mb-3">
            <label class="exampleFormControlInput1">ROOMNAME</label>
            <input type="text" class="form-control" name="troomname" placeholder="โปรดระบุชื่อ...">
        </div>
        <div class="mb-3">
            <label class="exampleFormControlInput1">DETAIL</label>
            <textarea class="form-control" name="tdetail" placeholder="โปรดระบุ Detail..."></textarea>
        </div>
        <div class="mb-3">
            <label class="exampleFormControlInput1">ROOMTYPE</label>
            <select class="form-control" name="troomtype">
                <?php
                include "dbcon.php";
                $sql = "SELECT *FROM tbroomtype";
                $query = $conn->query($sql);
                while ($row = $query->fetch_object()) {
                    ?>
                    <option value="<?= $row->roomtypeid ?>">
                        <?= $row->roomtypename ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div><input type="submit" class="btn btn-primary" name="bSubmitRoom" value="บันทึกข้อมูล"></div>
    </form>
</div>