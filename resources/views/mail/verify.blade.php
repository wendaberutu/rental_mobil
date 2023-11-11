<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi akun anda </title>
</head>

<body>
    <p>
        halo <b> {{ $details['name'] }}</b>
    </p>
    <br>
    <p>
        Berikut ini adalah data anda :
    </p>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $details['name'] }}</td>
        </tr>
        <tr>
            <td>Role</td>
            <td>:</td>
            <td>{{ $details['role'] }}</td>
        </tr>
        <tr>
            <td>Websitee</td>
            <td>:</td>
            <td>{{ $details['website'] }}</td>
        </tr>
        <tr>
            <!-- -->
            <td>Tanggal Register</td>
            <td>:</td>
            <td>{{ $details['datetime'] }}</td>
        </tr>
        <br><br><br>
        <center>
            <h3> klick di bawah ini untuk verifikasi akun anda :</h3>
            <a href="{{ $details['url'] }}"
                style="text-decoration :none; color:rgb(255,255,255); padding: 9px; background-color:orangered; font: bold; border-radius:20%">verifikasi</a>
            <br><br><br>
            <p>
                KEDAN TRANS AND TOUR
            </p>
        </center>
    </table>

</body>

</html>
