<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Ojek Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px 0;
            text-align: center;
        }
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            display: inline-block;
            color: white;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav ul li a:hover {
            background-color: #111;
        }
        main {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat datang di Aplikasi Ojek Online</h1>
    </header>
    <nav>
        <ul>
            <li><a href="customer.php?action=ijek">Ijek</a></li>
            <li><a href="customer.php?action=ifood">Ifood</a></li>
        </ul>
    </nav>
    <main>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action'])) {
            $action = $_GET['action'];
            if ($action == 'ijek') {
                echo '
                <h2>Pesan Ojek Motor</h2>
                <form action="customer.php?action=ijek" method="post">
                    <label for="pickup">Lokasi Jemput:</label>
                    <input type="text" id="pickup" name="pickup"><br><br>
                    <label for="destination">Tujuan:</label>
                    <input type="text" id="destination" name="destination"><br><br>
                    <input type="submit" value="Pesan">
                </form>';
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $pickup = htmlspecialchars($_POST['pickup']);
                    $destination = htmlspecialchars($_POST['destination']);
                    echo '<p>Ojek motor dipesan dari <strong>' . $pickup . '</strong> ke <strong>' . $destination . '</strong>.</p>';
                }
            } elseif ($action == 'ifood') {
                echo '
                <h2>Pesan Makanan</h2>
                <form action="services.php?action=ifood" method="post">
                    <label for="food">Nama Makanan:</label>
                    <input type="text" id="food" name="food"><br><br>
                    <label for="restaurant">Restoran:</label>
                    <input type="text" id="restaurant" name="restaurant"><br><br>
                    <input type="submit" value="Pesan">
                </form>';
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $food = htmlspecialchars($_POST['food']);
                    $restaurant = htmlspecialchars($_POST['restaurant']);
                    echo '<p>Makanan <strong>' . $food . '</strong> dipesan dari restoran <strong>' . $restaurant . '</strong>.</p>';
                }
            }
        } else {
            echo '<p>Pilih layanan yang Anda inginkan dari menu di atas.</p>';
        }
        ?>
    </main>
</body>
</html>
