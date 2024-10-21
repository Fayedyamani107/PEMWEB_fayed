<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Fayed's Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- HEADER -->
    <header>
        <nav>
            <div class="logo">
                <a href="index.php">Portofolio Fayed</a>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="about.php">About Me</a></li> 
                <li><a href="experience.php">Experience</a></li> 
                <li><a href="contact.php">Contact</a></li> 
            </ul>
        </nav>
    </header>

    <!-- ADDITIONAL ABOUT SECTION -->
    <section id="about"> 
        <div class="content-wrapper">
            <img src="https://img.freepik.com/free-vector/website-faq-section-user-help-desk-customer-support-frequently-asked-questions-problem-solution-quiz-game-confused-man-cartoon-character_335657-1602.jpg?t=st=1728541488~exp=1728545088~hmac=e04275509c4cf7bb7b22f90649cd35f27a39f67cc182ef17ef0dcd663da85468&w=740"
                alt="About Me Image" />
            <div class="kolom">
                <p class="deskripsi">Hello</p>
                <h2>My Name is Fayed</h2>
                <p>I am from Indonesia.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, aspernatur laboriosam totam impedit nostrum praesentium soluta quo quos consequatur veritatis dicta, cum architecto porro tempora, delectus voluptate! Dicta, dignissimos eligendi.</p>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION SECTION -->
    <section class="cta">
        <h2>Want to know more?</h2>
        <a href="contact.php" class="cta-btn">Contact Me</a>
    </section>

    <div class="kolom">
        <?php
        // Koneksi ke database
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "portofolio"; 

        // buat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // meriksa koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // ngambil data dari tabel about
        $query = "SELECT * FROM about";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p class='deskripsi'>" . $row["section"] . "</p>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["description"] . "</p>";
            }
        } else {
            echo "<p>No information available at the moment.</p>";
        }

        // nutup koneksi
        $conn->close();
        ?>
    </div>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2024 Fayed. All Rights Reserved.</p>
    </footer>
</body>

</html>