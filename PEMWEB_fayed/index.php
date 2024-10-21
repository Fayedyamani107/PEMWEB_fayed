<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Fayed</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='index.php'>Portofolio Fayed</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="about.php">About Me</a></li>
                    <li><a href="experience.php">Experience</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--- Untuk Home Page -->
    <section id="Home">
        <div class="content-wrapper">
            <img src="https://img.freepik.com/free-vector/cross-platform-frameworks-abstract-concept-illustration_335657-1825.jpg?t=st=1728026976~exp=1728030576~hmac=16019b2163ffa40d3ec3a32ef5eb90f53dfdbb5d4a405e109cd13eea10f5b5c4&w=826" alt="Home Image" />
            <div class="kolom">
                <p class="deskripsi">Hello</p>
                <h2>Welcome to my web</h2>
                <p>This is my portfolio web.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, aspernatur laboriosam totam impedit nostrum praesentium soluta quo quos consequatur veritatis dicta, cum architecto porro tempora, delectus voluptate! Dicta, dignissimos eligendi.</p>
                <p><a href="about.php" class="tbl-merah">Lihat selengkapnya</a></p> <!-- Menggunakan PHP untuk About -->
            </div>
        </div>
    </section>

    <?php
    // Mengambil data dari database untuk halaman About
    include 'koneksi.php';

    $query = "SELECT * FROM about";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h1>" . $row["title"] . "</h1>";
            echo "<p>" . $row["description"] . "</p>";
        }
    } else {
        echo "<h1>About Me</h1>";
        echo "<p>Data not available at the moment. Please check back later.</p>";
    }

    $conn->close();
    ?>

    <footer>
        <p>&copy; 2024 Fayed. All Rights Reserved.</p>
    </footer>
</body>

</html>