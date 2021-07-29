<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>

        body{
            
            background: linear-gradient(rgba(0,0,50,0.5), rgba(0,0,50,0.5)),url('contact.jpg' );
            width: 100%;
            text-align: center;
            background-size:cover;
            background-position:center;
            background-attachment: fixed;
             
        }
        div
        {
            margin-top: 60px;
            
        }

        form{
            margin-top: 40px;
            transition: all 6s ease-in-out;
        }

        .form-control{
            width: 600px;
            background: transparent;
            border: none;
            font-size: 20px;
            margin-bottom: 16px;
            color: black;
            border-bottom: 1px solid black;
        }

        input{
            height: 45px;
        }

        form .submit{
            background: #b9bbbf;
            border-color: transparent;
            color: black;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 1px;
            height: 50px;
            margin-top: 20px;
            
        }

        form .submit:hover
        {
            background-color: #939598;
            cursor: pointer;
        }

        
    </style>
    <script>
        function send()
        {
            alert("Thank You for your feedback!! Your Email have sent to our team and will get back to you soonest");
            window.open("index.php");
        }

    </script>
</head>
<body>
    <div class="contact-title">

        <h1>CONTACT US</h1>

        <h2>Tell us your suggestion or feedback about your experience</h2>

    </div>

    <div class="contact-form">
        <form id="contact-form" method="post" onsubmit="send()">
            <input type="text" name="name" class="form-control" placeholder="Name" required> <br>
            <input type="text" name="name" class="form-control" placeholder="Email" required> <br>
            <textarea name="comment" class="form-control" placeholder="Your Message" row="10" cols="25" required></textarea><br>
            <input type="submit" class="form-control submit" value="SEND MESSAGE">

        </form>

        <!-- <a href="index.php?page=contact">Contact Us</a> -->
    </div>
</body>
</html>