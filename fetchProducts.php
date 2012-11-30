	
<?php
    
	$user = "root";
	$password = "123qwe";
	$dbname = "myPinphp";
	
//    header('Content-Type: application/json; charset=utf-8');
    
    // Connect to database server
    
    $cid = $_POST['catId'];
    $pageNum = $_POST['pageNumber'];

    $hd = mysql_connect("localhost", $user, $password)

          or die ("Unable to connect");

    // Select database

    mysql_select_db ($dbname, $hd)

          or die ("Unable to select database");
    
    
    mysql_query("SET CHARACTER SET utf8", $hd);
    mysql_query("SET NAMES 'utf8'", $hd);

    $startNum = ($pageNum - 1) * 20;
    
    $res = mysql_query("SELECT item_key,title,img,simg,bimg,price,url,likes,haves FROM pp_items where cid=$cid ORDER BY `pp_items`.`last_time` DESC LIMIT $startNum,20")
    
    or die ("Unable to select :-(");
	
    $products = array();
    
    if(mysql_num_rows($res))
    {
        while($rows = mysql_fetch_assoc($res))
        {
            $products[] = $rows;
        }
    }
    
    
 	mysql_close($hd);
    
    echo json_encode($products);
?>
