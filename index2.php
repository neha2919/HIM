<!DOCTYPE html>
<head>
    <title>Options Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <div class="options-container">
        <!-- <button class="option" onclick="window.location.href='pictures.html'">
            <h2>Pictures</h2>
        </button>
        <button class="option" onclick="window.location.href='video.html'">
            <h2>Video</h2>
        </button> -->
        <button class="option" onclick="window.location.href='letterbox.html'">
            <h2>Letterbox</h2>
        </button>
        <button class="option" onclick="window.location.href='surp.html'">
    <h2>Surprise</h2>
</button>

    </div>
    <div class="complaint-box">
        <h2>Complaint Box</h2>
        <form class="" action="complaint.php" method="post">
            Email <input type="email" name = "email"><br>
            Subject <input type="subject" name = "subject"><br>
            Message <input type="message" name ="message"><br>
            <button type = "submit" name = "send">Submit</button>
        </form>
    </div>
</body>
</html>
