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
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            margin: auto;
        }
        h1 {
            color: #4CAF50;
        }
        label {
            display: block;
            margin-top: 10px;
            text-align: left;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .message {
            margin-top: 20px;
            background-color: #e7f5e6;
            padding: 10px;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat datang di Aplikasi Ojek Online</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/">Ijek</a></li>
            <li><a href="/?page=ifood">Ifood</a></li>
        </ul>
    </nav>
    <main>
        <div class="container">
            <?php
            if(isset($_GET['page']) && $_GET['page'] == 'ifood'){
            ?>
            <h1>Pesan Makanan</h1>
            <form action="/" method="post">
                <label for="food">Nama Makanan:</label>
                <input type="text" id="food" name="food" required>
                <label for="restaurant">Restoran:</label>
                <input type="text" id="restaurant" name="restaurant" required>
                <input type="submit" value="Pesan">
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['page']) && $_GET['page'] == 'ifood') {
                    $food = htmlspecialchars($_POST['food']);
                    $restaurant = htmlspecialchars($_POST['restaurant']);
                    echo "<div class='message'><p>Makanan: <strong>$food</strong><br>Dipesan dari restoran: <strong>$restaurant</strong></p></div>";
                }
            } else {
            ?>
            <h1>Pesan Ojek Motor</h1>
            <form action="/" method="post">
                <label for="pickup">Lokasi Jemput:</label>
                <input type="text" id="pickup" name="pickup" required>
                <label for="destination">Tujuan:</label>
                <input type="text" id="destination" name="destination" required>
                <input type="submit" value="Pesan">
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_GET['page'])) {
                    $pickup = htmlspecialchars($_POST['pickup']);
                    $destination = htmlspecialchars($_POST['destination']);
                    echo "<div class='message'><p>Ojek motor dipesan dari: <strong>$pickup</strong><br>ke tujuan: <strong>$destination</strong></p></div>";
                }
            }
            ?>
        </div>
    </main>
</body>
</html>
