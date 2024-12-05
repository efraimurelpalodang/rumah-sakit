<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My Style -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/styleLogin.css">
    <title>Form Login</title>
</head>
<body>
    <form action="<?= BASEURL; ?>/dashboard/index" method="post" autocomplete="off">
        <div class="segment">
            <h1>Sign up</h1>
        </div>
        <label>
            <input type="text" placeholder="Username" name="username"/>
        </label>
        <label>
            <input type="password" placeholder="Password" name="password"/>
        </label>
        <button class="red" type="submit" name="login"><i class="icon ion-md-lock"></i> Log in</button>
    </form>
</body>
</html>
