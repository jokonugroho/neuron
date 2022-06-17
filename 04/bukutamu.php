<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="form-horizontal" method="post" action="bukutamu-handler.php" autocomplete="off">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" placeholder="Nama">
                </td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td>
                    <textarea name="komentar" placeholder="Komentar"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Tulis</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>