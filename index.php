<?php
session_start();

var_dump($_SESSION);

if ($_REQUEST['username'] == 'florian' && $_REQUEST['password'] == '123456') {
    echo 'Login successful!';
    $_SESSION['logged_in'] = true;
} else {
    echo 'Login failed!';
    $_SESSION['logged_in'] = false;
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Musikdatenbank</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <header>
            <h1>Musikdatenbank</h1>
        </header>
        <main>
            <?php
            if ($_SESSION['logged_in'] !== true) { ?>
            <form>
                <label>
                    Benutzername:
                    <input type="text" name="username" placeholder="florian">
                </label>
                <label>
                    Passwort:
                    <input type="password" name="password" placeholder="123456">
                </label>
                <button>Login</button>
            </form>
            <?php } else { ?>
            <table class="album">
                <thead>
                    <tr>
                        <th>Artist</th>
                        <th>Album</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Xavier Naidoo</td>
                        <td>Nicht von dieser Welt 2</td>
                    </tr>
                    <tr>
                        <td>AnnenMayKantereit</td>
                        <td>Alles Nix Konkretes</td>
                    </tr>
                    <tr>
                        <td>Pet Shop Boys</td>
                        <td>Super</td>
                    </tr>
                    <tr>
                        <td>Roger Cicero</td>
                        <td>Cicero Sings Sinatra - Live in Hamburg</td>
                    </tr>
                    <tr>
                        <td>Moderat</td>
                        <td>III</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>All rights reserved.</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
            <?php } ?>
        </main>
    </body>
</html>