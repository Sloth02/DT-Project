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
            <label class="form-label">Room name</label>
            <input type="txet" class="form-control" placeholder="room name" name="roomname" required>
            <label class="form-label">Detail</label>
            <input type="text" class="form-control" placeholder="detail" name="detail" required>
            <label class="form-label">Room type id</label>

            <select class="form-control" name="roomtypeid">
                <?php
                include "database.php";
                $sql = "SELECT *FROM tbroomtype";
                $query = $conn->query($sql);
                while ($row = $query->fetch_object()) {
                    ?>
                    <option value="<?= $row->roomtypeid ?>">
                        <?= $row->roomtypename?>
                    </option>
                <?php } ?>

            </select>
  
            <div>
                <button type="submit" class="btn btn-success" style="margin-top: 20px;"><i class="fa-solid fa-floppy-disk"></i> บันทึกข้อมูล</button>
            </div>
        </form>
    </div>
    <!--====form section start====-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="ajax-script.js"></script>
</body>

</html>

<h2 class="p1"><i class="fa-solid fa-magnifying-glass"></i> TB-ROOM</h2>
<div class="content">
    <table class="table table-dark table-striped table-bordered table-hover">
        <thead>
            <th>ID</th>
            <th>Room Name</th>
            <th>Detail </th>
            <th>Room type id</th>
            <th>Toom type name</th>
            <th>Price</th>
        </thead>
        <tbody>
            <?php
            include"database.php";
            $sql="SELECT * FROM tbroom INNER JOIN tbroomtype ON tbroom.roomtypeid=tbroomtype.roomtypeid";
            $query=$conn->query($sql);
            while($row=$query->fetch_object()){
                ?>
                <tr>
                    <td><?= $row->roomid ?></td>
                    <td><?= $row->roomname ?></td>
                    <td><?= $row->detail ?></td>
                    <td><?= $row->roomtypeid ?></td>
                    <th><?=$row->roomtypename?></th>
                    <th><?=$row->price?></th>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>