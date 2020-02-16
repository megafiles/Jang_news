<?php
include '..\wp-config.php';
echo DB_NAME;

echo '<BR>'.DB_USER;
echo '<BR>'.DB_PASSWORD;
echo '<BR>'.DB_HOST;
echo '<br>'. DB_CHARSET;


$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASSWORD;
$dbname = DB_NAME;;

// post data

$post_autohor='1';
$post_date=date("Y-m-d h:i:s");
$post_date_gmt=date("Y-m-d h:i:s");
$post_content='HELLOW WORLD';
$post_title='MY ROBO3';
$post_status='publish';
$comment_status='open';
$ping_status='closed';
$post_name='MY-ROBO5';
$post_modified=date("Y-m-d h:i:s");
$guid='http://localhost/news/MY-ROBO2/';
$menu_order='0';
$post_type='post';
$post_mime_type='';
$comment_count='0';
$post_parent='193';


//---00000000====================================Dwonloading new newspaper--0000==========================





for($i=1; $i<=12; $i++){
    $url="https://e.jang.com.pk/" . date("m-d").'-20'.date('y').'/quetta/images/main_page_images/page';
    $url=$url.$i.'.jpg';
    $dtn='Downloaded_images/Quetta/Jang/Quetta_Jang_'.date("m-d").'-20'.date('y').'_page'.$i.'.jpg';
    //echo $dtn.'<br>';
    
    //echo $url.'<br>';
// compress($url,$dtn,10);
 }



//compress("https://e.jang.com.pk/02-11-2020/quetta/images/main_page_images/page13.jpg","compressed.jpg",'10');
//image compress php commands----
function compress($source, $destination, $quality) {

$info = getimagesize($source);

if ($info['mime'] == 'image/jpeg') 
    $image = imagecreatefromjpeg($source);

elseif ($info['mime'] == 'image/gif') 
    $image = imagecreatefromgif($source);

elseif ($info['mime'] == 'image/png') 
    $image = imagecreatefrompng($source);

imagejpeg($image, $destination, $quality);

return $destination;
}












// ============================================================creating new post==================================
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO wp_newsposts (post_author, post_date, post_date_gmt,
 post_content,
 post_title,
post_status,
comment_status,
ping_status,

post_name,
post_modified,
post_modified_gmt,
guid,
menu_order,
post_type,
post_mime_type,
comment_count,
post_parent)
VALUES ('$post_autohor', '$post_date', '$post_date_gmt', 
'$post_content',
'$post_title',
'$post_status',
'$comment_status',
'$ping_status',
'$post_name',
'$post_modified',
'$post_modified_gmt',
'$guid',
'$menu_order',
'$post_type',
'$post_mime_type',
'$comment_count',
'$post_parent')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>






