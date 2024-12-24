<?php
    $name='สมชาย';
    $age=30;
    $career='รับจ้างทั่วไป';
    echo "ชื่อ :".$name.'<br>';
    echo "อายุ :".$age.'<br>';
    echo "อาชีพ :".$career.'<br>';
    echo"<hr>";

    echo "ชื่อ :$name<br> อายุ :$age<br> อาชีพ :$career<br>";
    echo"<hr>";

    echo 'ชื่อ :$name<br> อายุ :$age<br> อาชีพ :$career<br>';
    echo"<hr>";

    echo"อายุ: {$age}$";
    echo"<hr>";

    echo"<h2>ตัวอย่างการใช้งาน บวก++</h2>";
    $num1=10;
    $num2=20;
    $sum=$num1+$num2;
    echo "ผลรวมเท่ากับ :".$sum;
    $sum+=5;
    $sum*=5;
    echo "ผลรวมเท่ากับ :".$sum;
    echo"<hr>";

    echo"<h2>ตัวอย่างการใช้งาน ลบ--</h2>";
    $count=1;
    $count++; //เพิ่มทีละ 1
    $count+=2;//เพิ่มทีละ 2
    $count*=2;//คูณเพิ่มทีละ 2
    echo $count; //คำตอบ 8
    echo"<hr>";

    echo"<h2>เงื่อนไขแบบ Ternary</h2>";
    $x=30;
    $b = ($x % 2 == 0) ? 'เลขคู่' : 'เลขคี่';
    echo "ผลลัพธ์คือ : ".$b;
    echo"<hr>";

    echo"<h2>การเซ็ตค่าว่าง</h2>";
    $user = 'user1';
    $password = '1234';
    if(empty($user) || empty($password)){
        $msg="กรุณากรอกข้อมูล";
    }else{
        $msg="ขอบคุณ";
    }
    echo $msg;
    echo"<hr>";

    echo"<h2>การใช้งาน if-else</h2>";
    $status="admi"; //admin member manager
    if($status=="admin"){
        echo"i am admin";
    }elseif($status=="member"){
        echo"i am member";
    }elseif($status=="manager"){
        echo"i am manager";
    }else{
        echo"invaild user status !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
    }
    echo"<hr>";

    echo"<h2>การใช้เครื่องหมายเปรียบเทียบ</h2>";
    $pw1 = 123;
    $pw2 = 123;
    if($pw1 != $pw2){
        echo 'รหัสผ่านไม่ตรงกัน';
    }else{
        echo 'รหัสผ่านตรงกัน';
    }
?>  