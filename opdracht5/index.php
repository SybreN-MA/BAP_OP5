<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 5</title>
</head>
<body>
    <form method="post" action="mail.php">
       <label>Afzender:
        <input type ="email" name="from" placeholder="24801@ma-web.nl" ></label>
        <br />
       <label>Onderwerp:
           <input type="text" name="subject" placeholder="Opdracht 5"/></label>
        <br />
        <label>Bericht:
            <br/>
            <textarea cols="100" rows="10" name="message"></textarea></label>
        <br />
        <input type="submit" name="submit" value="Verstuur"/>
    </form>
</body>
</html>