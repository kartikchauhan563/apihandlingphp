https://jsonplaceholder.typicode.com/posts
<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://jsonplaceholder.typicode.com/posts',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));
$response = curl_exec($curl);
curl_close($curl);
$data =  json_decode($response,true);
// echo "<pre>";
// print_r($data);

?>

<!DOCTYPE html>

<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <title>API Handling</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="" />

    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
     
      
        <div class="pagebodyWrap">
            <div class="pagebody">
                <!--dataListing-->
                <div class="dataListing">
                    <div class="tabel_rows head">
                        <div class="table_column">ID</div>
                        <div class="table_column">UserId</div>
                        <div class="table_column">Title</div>
                        <div class="table_column">Body</div>
                    </div>
                         
                    <?php
                  //  $srno=0 ;          
                    foreach($data as $i){
                  //  $srno++;
                    ?>
                    <div class="tabel_rows">
                        <div class="table_column"><?php echo $i['id']?></div>
                        <div class="table_column"><?php echo $i['userId']?></div>
                        <div class="table_column"><?php echo $i['title']?></div>
                        <div class="table_column"><?php echo $i['body']?></div>
                    </div>
                    <?php  
                } 
                ?>
                  
                </div>
                <!--/dataListing-->
            </div>
        </div>
        <!--/footer-->
    </div>
    <!--/wrapper-->

</body>

</html>
