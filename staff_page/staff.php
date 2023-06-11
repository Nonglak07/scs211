<?php
$people_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"),true);
$people = $people_obj["people"];
?>

<html>

<head>
    <title>Team Member Section Design In HTML and CSS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: #efefef;
            font-family: sans-serif;
        }

        .title-box {
            text-align: center;
            margin: 100px auto 50px;
        }

        .title-box p {
            margin-top: 10px;
            line-height: 24px;
        }

        /* Sizebox */
        .profile-box {
            width: 240px;
            height: 240px;
            background: #fff;
            border-radius: 4px;
            margin-bottom: 30px;
            box-shadow: 0 10px 10px 10px rgba(115, 193, 255, 0.1);
            padding: 20px;
            position: relative;
            transition: background 0.5s;
        }

        .profile-box img {
            width: 100px;
            position: absolute;
            top: 20px;
            right: 20px;
            border-radius: 4px;
            transition: .5s;
        }

        .profile-box h4 {
            margin-top: 25px;
            margin-bottom: 5px;
            color: #2196f3;
        }

        .small {
            color: #555;
        }

        .social-box {
            background: #2196f3;
            margin: 60px auto 25px;
            text-align: center;
            border-radius: 3px;
        }

        /* <!--tap icon--> */
        .social-box .fa {
            margin: 5px;
            color: #fff;
            cursor: pointer;
        }

        .profile-box p {
            text-align: center;
            line-height: 24px;
            color: #555;
        }

        .team-row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            width: 85%;
            margin: auto;
        }

        .profile-box img:hover {
            width: 240px;
        }

        .profile-box:hover {
            background: #2196f3;
        }

        .profile-box:hover h4 {
            color: #fff;
        }

        .profile-box:hover p {
            color: #efefef;
        }

        .profile-box:hover small {
            color: #efefef;
        }

        .profile-box:hover .social-box {
            background: #fff;
        }

        .profile-box:hover .social-box .fa {
            color: #2196f3;
        }
    </style>
</head>

<body>
    <div class="title-box">
        <h1>Our Team</h1>
        <p>Difficult doesn’t mean impossible.<br />
            It simply means that you have to work hard.</p>
    </div>
    <!-- card team-->
    <div class="team-row">
        <!-- card 1 -->
        <?php foreach($people as $row){ ?>
        <div class="profile-box">
            <h4><?=$row["name"]?></h4>
            <small><?=$row["role"]?></small>
            <img src="<?= $row["image"] ?>">
            <div class="social-box">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-phone"></i>
            </div>
            <p><?=$row["education"]?>
            </p>
        </div>
        <?php } ?>
        
        <!-- card 2 -->
        <!-- <div class="profile-box">
            <h4>Robert P.</h4>
            <small>Programmer</small>
            <img src="images\image2.jpg">
            <div class="social-box">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-phone"></i>
            </div>
            <p>Forget all the reasons why it won’t work
                and believe the one reason why it will.
            </p>
        </div> -->
        <!-- card 3 -->
        <!-- <div class="profile-box">
            <h4>Donald R.</h4>
            <small>Founder</small>
            <img src="images\images.jpg">
            <div class="social-box">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-phone"></i>
            </div>
            <p>Forget all the reasons why it won’t work
                and believe the one reason why it will.
            </p>
        </div> -->
        <!-- card 4 -->
        <!-- <div class="profile-box">
            <h4>Philip L.</h4>
            <small>Marketing</small>
            <img src="images\image3.jpg">
            <div class="social-box">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-phone"></i>
            </div>
            <p>Forget all the reasons why it won’t work
                and believe the one reason why it will.
            </p>
        </div> -->
        <!-- card 5 -->
        <!-- <div class="profile-box">
            <h4>Michael D. </h4>
            <small>Founder</small>
            <img src="images\image5.jpg">
            <div class="social-box">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-phone"></i>
            </div>
            <p>Forget all the reasons why it won’t work
                and believe the one reason why it will.
            </p>
        </div> -->
        <!-- card 6 -->
        <!-- <div class="profile-box">
            <h4>Peter H.</h4>
            <small>Founder</small>
            <img src="images\image6.jpg">
            <div class="social-box">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-phone"></i>
            </div>
            <p>Forget all the reasons why it won’t work
                and believe the one reason why it will.
            </p>
        </div> -->
        <!-- card 7 -->
        <!-- <div class="profile-box">
            <h4>Gary F.</h4>
            <small>Production</small>
            <img src="images\image7.jpg">
            <div class="social-box">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-phone"></i>
            </div>
            <p>Forget all the reasons why it won’t work
                and believe the one reason why it will.
            </p>
        </div> -->
        <!-- card 8 -->
        <!-- <div class="profile-box">
            <h4>David A.</h4>
            <small>Production</small>
            <img src="images\image8.jpg">
            <div class="social-box">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-phone"></i>
            </div>
            <p>Forget all the reasons why it won’t work
                and believe the one reason why it will.
            </p>
        </div> -->

    </div>

</body>

</html>