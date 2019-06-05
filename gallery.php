<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="./styles/main-style.css">
    <link rel="stylesheet" type="text/css" href="./styles/gallery-style.css">
    <link rel="stylesheet" type="text/css" href="./styles/menu-style.css">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <title>Taimoor Khan</title>
</head>
<body>
    <div class="main">
            <div class="side-bar">
                <div class="side-bar-content">
                    <div class="title">
                            <h1 class="heading">Taimoor Khan</h1>
                            <h2 class="sub-heading">Photography</h2>
                    </div>
                    <nav class="menu">
                        <ul class="menu-list">
                            <a href="index.html"><li class="menu-list-item">Home</li></a>
                            <a href="gallery.php"><li class="menu-list-item">Gallery</li></a>
                            <a><li class="menu-list-item unavailable">Film</li></a>
                            <a><li class="menu-list-item unavailable">Weddings</li></a>
                        </ul>
                    </nav>
                    <div class="contact">
                        <ul class="contact-list">
                                <li class="contact-item">
                                    <img class="contact-icon" src="./icons/phone-icon.png" />
                                    (647) 201-7737
                                </li>
                                <li class="contact-item">
                                        <svg class="contact-icon" viewBox="0 0 98 67" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Group-2" stroke="#000000" stroke-width="7">
                                                    <rect id="Rectangle" x="3.5" y="3.5" width="91" height="60" rx="10"></rect>
                                                    <polygon id="Triangle" stroke-linejoin="round" transform="translate(49.500000, 23.000000) scale(1, -1) translate(-49.500000, -23.000000) " points="49.5 4 84 42 15 42"></polygon>
                                                </g>
                                            </g>
                                        </svg>
                                    taimoor.azfar@gmail.com
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
                <div class="gallery">
                    <?php
                        header('Access-Control-Allow-Origin: *');
                    ?>
                    <?php
                        $dirname = "./photos/";
                        $images = glob($dirname."*.jpg");
                        
                        foreach($images as $image) {
                            echo '<div class="gallery-image"><img class="lazy" data-src="'.$image.'"/></div>';
                        }
                    ?>
                </div>
        </div>

        <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="jquery.lazy.min.js"></script>
        <script src="gallery-script.js"></script>
</body>

</html>