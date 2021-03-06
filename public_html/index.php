<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walmann.IT</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style_mobile.css">
    <!-- <link rel="stylesheet" href="style_animation.css"> -->
    <!-- <link rel="stylesheet" href="style_animation_mobile.css"> -->

    <link href='https://fonts.googleapis.com/css?family=Mukta Vaani' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <!-- <link href='https://css.gg/arrow-left-o.css' rel='stylesheet'> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> -->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XFM3E1EKX5"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-XFM3E1EKX5');
    </script>

</head>

<script>
    first_load = true
    function load_page(page_to_get){
        if (first_load == false){
            var element = document.getElementById('grey_area_container');
            element.classList.add('animate__animated', 'animate__slideOutDown')
            element.addEventListener('animationend', () => {
                // console.log(page_to_get)
                if (page_to_get == 'Intro'){
                    page_to_load = get_page('/Intro_box.html');
                }
                if (page_to_get == "Email"){
                    page_to_load = get_page('/email_box.html');
                                document.getElementById('grey_area_container').innerHTML = page_to_load

                }
                document.getElementById('grey_area_container').innerHTML = page_to_load
                element.classList.remove('animate__slideOutDown')
                element.classList.add('animate__slideInRight')
            });
        }
        if (first_load == true){
            page_to_load = get_page('Intro_box.html');
            // page_to_load = get_page('email_box.html');
            document.getElementById('grey_area_container').innerHTML = page_to_load
            first_load = false;
        }

    }
    function get_page(href){
        var xmlhttp = new XMLHttpRequest();
                // console.log(href)
                xmlhttp.open("GET", href, false);
                xmlhttp.send();
                return xmlhttp.responseText;
    }
    // document.getElementById('grey_area_container').innerHTML = load_page('Intro_Box.html');"
</script>
<!-- onload="load_page('Intro')"> -->
<body>
   <!-- SlideInCustom animate__animated animate__fadeInRightBig -->
    <div class="portrait">
        <!-- <img src="./images/Julegenser.jpg" alt=""> -->
    </div>
    <div id="grey_area" class="close-to-open grey_box">     <!--  animate__animated animate__slideInRight  -->
        <div id="grey_area_container" class="grey_box_container">
            <?php include("./Intro_box.html"); ?>
            
        </div>
        
    </div>
</body>
</html>