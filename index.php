<?php   require ('header.php');
//<link rel='stylesheet' href='css/style.css'>
//<form action="content.php" method="post">
//    <div class="center">
//        <input type="text" name="account" placeholder="Account"></br>
//        <input type="text" name="countImage" placeholder="Count"></br>
//        <input type="submit" name="submit">
//    </div>
//</form>

//$group_id = 210700286;
//$count_post = 2;
//$request_params = array(
//'owner_id' => $group_id,
//'count' => $count_post,
//'filter' => 'owner',
//'extended' => '1',
//'v' => '5.52',
//'access_token' => 'f802f98a7fbb64c4ced99638ef06832ba5c7d8a7b0906785b178d1146e2296f313f6039f08a32cd83e918'
//);
//$get_params = http_build_query($request_params);
//$result = json_decode(file_get_contents('https://api.vk.com/method/wall.get?' . $get_params));



$user_id = 210700286;
$request_params = array(
	'user_id' => $user_id,
	'fields' => 'bdate',
	'v' => '5.52',
	'access_token' => 'f802f98a7fbb64c4ced99638ef06832ba5c7d8a7b0906785b178d1146e2296f313f6039f08a32cd83e918'
);
$get_params = http_build_query($request_params);
$result = json_decode(file_get_contents('https://api.vk.com/method/users.get?' . $get_params));
echo (gettype($result));
echo($result->response[0]->bdate);



