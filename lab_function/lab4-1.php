<?php
echo "<h2>การใช้ strlen</h2>";
$strlen = "i am a string";
echo strlen($strlen);
$strlen2 = "มหาวิทยาลัย";
echo "<br>";
echo strlen($strlen2);

echo "<h2>การใช้งาน Explode (การสร้างStringจากอาทิตย์)</h2>";
$expStr="i am a string";
$expArr=explode(' ',$expStr);
print_r($expArr);
echo"<br>";
echo $expArr[0].$expArr[1].$expArr[2].$expArr[3];

echo"<h2>การใช้งาน รทยสนกำ (การสร้างอาร์เรย์จากสติง)</h2>";
$impArr=["i","am","an","array"];
$impStr=implode($impArr);
echo $impStr;
echo "<br>";
$filename=['img123','png'];
$impFilename=implode('.',$filename);
echo $impFilename[0].$impFilename[1].$impFilename[2].
$impFilename[3].$impFilename[4].$impFilename[5];
echo"<br>";
echo $filename[0]."<br>";
echo $impFilename;

echo"<h2>การเข้ารหัสแบบ md5 (มี 32 ตัวอักษร)</h2>";
$password = "Iantao";
$hashValue = md5($password);
echo $hashValue;
echo"<br>";

echo "<h2>การเข้ารหัสแบบ sha256 ปลอดภัยกว่าเพราะมี 64 ตัวอักษร </h2>";
echo "<hr>";
$password = "Ianta";
$hashValue = hash('sha256',$password);
echo $hashValue;
echo '<br>';

//https://md5decrypt.net

$storedData = "971093d1ffd629ca367b67c57ce2c73a";
$oringinalText = "sha256";
if(hash_equals(hash('sha256',$oringinalText),$storedData)){
    echo'ล็อคอินไม่สำเร็จ';
}else{
    echo 'รหัสไม่ถูกต้อง';
}
?>