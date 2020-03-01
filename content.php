<?php
require ('header.php');
define("URL", "api.instagram.com");
?>
<link rel='stylesheet' href='css/style.css'>
<div class="center">
    <?php
    $a = $_POST['account'];
    $b = $_POST['countImage'];
    echo var_dump($a, $b, URL);
    ?>

https://api.instagram.com/oauth/authorize/?client_id=562565477851628&redirect_uri=https://78.47.48.188/auth/&response_type=code&scope=user_profile,user_media
AQC226JzAGWhGQ950DwpGXakGyKGGZNsNbfX3jCIym2KopOPbbdX1K-nzoqMVefIpC89mnZchKh8S27MezVXCmdR-O29PwtStI-gB5Wysr1xYIAj3K0_vV5JF03j0XJaLzdIAEhRTuDK02wBMpAMpQ2lMvnUXVkwl83gF0bejPLBrH3xvj6qf9Ryzdu1vIQjkIkx7-6cdnGaVaOs8MhcAaDCml8uZ74QFsmQIk3-C9_cmA
curl -X POST https://api.instagram.com/oauth/access_token -F client_id=562565477851628 -F client_secret=caaf9bbfb6cab96b0c0519dc0014906d -F grant_type=authorization_code -F redirect_uri=https://78.47.48.188/auth/ -F code=AQA7QSEskd_2SYEQMGT9t67-Z0WtSGw9ic4N3NiiBMA-bhQiODbioLJ9v4KwU4md-fjA6_tLouAH1D8D30cMTVy21sY4l5VOmgRg7f1FDeAtAy6XN6y0sdwaWn-TPWTyzZZEaW84OZK7bfJIpjoGMfHNfle6SEUtKWC5BTQC747F8tRUnta1nCIPCFBkD998-c5V85SgxIWX0y6PPqtoAiCb43CeKnROP9denoF5ft0xyQ

{"access_token": "IGQVJXY2ZAPMHdkUXNnb2wzMGcxQnIxb3I2YTFlNU56U2FxbC04d18tZAUVJWGxVcEEzSVVUQlVIUVFmd01HRjA5QnMwMVpIY0ljSmFTT2JhUHltaEVFWDhTTkpIS1ludmFlNHdyMERzYnlkRldwdXhFSHFBem8tN1hhbmhZA",
"user_id": 17841400821749078}