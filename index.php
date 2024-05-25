<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTOBOT NI JUSWA</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .ugh {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <?php
        $encryptedLink = "aHR0cHM6Ly9hdXRvYm90MC5vbnJlbmRlci5jb20v"; // Base64 encoded link
        $decodedLink = base64_decode($encryptedLink);
        echo '<iframe class="ugh" src="' . $decodedLink . '" frameborder="0"></iframe>';
    ?>
</body>
</html>
