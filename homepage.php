<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
         
            .mySlides    /*class selector */
            {
                display: none
            }

            img
            {
                vertical-align: middle;
            }

            /* Slideshow container */
            .slideshow-container
            {
                max-width: 1000px;
                position: relative;
                margin: auto;
            }

            /* Next & previous buttons */
            .prev, .next
            {
                cursor: pointer;
                position: absolute;
                
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -22px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
            }

            /* Position the "next button" to the right */
            .next
            {
                right: 0;
                border-radius: 3px 0 0 3px;
            }

            .prev

            {
                left: 0;
                border-radius: 3px 0 0 3px;
            }


            /* On hover, add a black background color with a
            little bit see-through */

            .prev:hover, .next:hover
            {
                background-color: rgba(0,0,0,0.8);
            }


            .text
            {
                color: cyan;
                font-size: 20px;
                font-weight:bold;
                padding: 8px 12px;
                position: absolute;
                bottom: 8px;
                width: 100%;
                text-align: center;
            }

            .active
            {
                background-color: #717171;
            }

            /* Fading animation */
            .fade
            {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
            }

            @-webkit-keyframes fade
            {
                from {opacity: .4}
                to {opacity: 1}
            }

            @keyframes fade
            {
                from {opacity: .4}
                to {opacity: 1}
            }

            /* On smaller screens, decrease text size */

            @media only screen and (max-width: 300px)
            {
                .prev, .next,.text
                {
                    font-size: 11px
                }
            }
            h2
            {
                
                font-family:monospace;
                font-style:oblique;
            }
            h3
            {
                font-family:monospace;
                font-style:italic;
            }
    </style>
</head>
<body>
    <h2>"The Journey Of A Thousand Miles Begins With A Single Step"</h2>
    <h3>Travel With Us</h3>
<article>
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img src="curious.JPG" height=400   style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="citybreaks.JPG" height=400 style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="Adventures.JPG"  height=400   style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="hiking.JPG"  height=400    style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="roadtrip.JPG"  height=400    style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="wildlife.JPG"  height=400    style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>


                <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n)
                    {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n)
                    {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n)
                    {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");

                        if (n > slides.length)
                        {
                            slideIndex = 1
                        }
                        if (n < 1)
                        {
                            slideIndex = slides.length
                        }
                        for (i = 0; i < slides.length; i++)
                        {
                            slides[i].style.display = "none";
                        }

                        slides[slideIndex-1].style.display = "block";

                    }
                </script>

            </article>
</body>
</html>