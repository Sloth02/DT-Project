<?PHP  
    //index.php
    include"dbcon.php"; //เชื่อมต่อฐานข้อมูล
    $sql="SELECT * from tbstudent";
    $query=$conn->query($sql);//นำคำสั่ง sql ไปกระทำกับฐานข้อมูล
    while($rs=$query->fetch_object()){
        echo $rs->stdid."," .$rs->firstname." ".$rs->lastname.",&nbsp;&nbsp".$rs->address."<br>";
    }

    echo"<hr>";
    echo"<br>";

    $sql2="SELECT * from tbstudent WHERE stdid='2' ";
    $query2=$conn->query($sql2);//นำคำสั่ง sql ไปกระทำกับฐานข้อมูล
    while($rs2=$query2->fetch_object()){
        echo $rs2->stdid."," .$rs2->firstname." ".$rs2->lastname.",&nbsp;&nbsp".$rs2->address."<br>";
    }
    echo"<br>";
    echo"<hr>";
    echo"<br>";
    $sql3="SELECT * from tbstudent WHERE firstname LIKE'%ต%' ";
    $query3=$conn->query($sql3);//นำคำสั่ง sql ไปกระทำกับฐานข้อมูล
    while($rs3=$query3->fetch_object()){
        echo $rs3->stdid."," .$rs3->firstname." ".$rs3->lastname.",&nbsp;&nbsp".$rs3->address."<br>";
    }
?>