<link rel='stylesheet' href='css/style.css'>
<?php   require ('header.php');
//<link rel='stylesheet' href='css/style.css'>
//<form action="content.php" method="post">
//    <div class="center">
//        <input type="text" name="account" placeholder="Account"></br>
//        <input type="text" name="countImage" placeholder="Count"></br>
//        <input type="submit" name="submit">
//    </div>
//</form>

function object_to_array($data)
{
    if (is_array($data) || is_object($data))
    {
        $result = array();
        foreach ($data as $key => $value)
        {
            $result[$key] = object_to_array($value);
        }
        return $result;
    }
    return $data;
}

$arr = array();

$group_id = -57169109;
$count_post = 10;
$request_params = array(
'owner_id' => $group_id,
'count' => $count_post,
'filter' => 'owner',
'extended' => '0',
'v' => '5.52',
'access_token' => 'f802f98a7fbb64c4ced99638ef06832ba5c7d8a7b0906785b178d1146e2296f313f6039f08a32cd83e918'
);
$get_params = http_build_query($request_params);
$result = json_decode(file_get_contents('https://api.vk.com/method/wall.get?' . $get_params));
$arr = object_to_array($result);

for ($i=0; $i<=$count_post; $i++) {
    $doc_title = $arr['response']['items'][$i]['attachments'][1]['doc']['title'];
    $doc_url = $arr['response']['items'][$i]['attachments'][1]['doc']['url'];
    $doc_size = $arr['response']['items'][$i]['attachments'][1]['doc']['size'];
    echo $i. "<br>";
    echo $doc_title."<br>". $doc_url."<br>". round($doc_size/1000000,2)." mb <br>";
}


