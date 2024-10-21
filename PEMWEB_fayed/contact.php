<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Pribadi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="wrapper">
            <div class="logo"><a href='index.php'>Portofolio Fayed</a></div>
            <nav>
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="about.php">about me</a></li>
                    <li><a href="projects.php">projects</a></li>
                    <li><a href="experience.php">experience</a></li>
                    <li><a href="contact.php">contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section>
            <div class="kolom">
                <h2>Formulir Kontak</h2>
            
                <form action="send_message.php" method="POST" class="contact-form">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Pesan:</label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit">Kirim</button>
                </form>
            </div>
        </section>

        <section>
            <div class="kolom">
                <h2>Informasi Kontak</h2>
                <p>Alamat: Jl. Mulu jadian kgk No. 123, Kota Los Santos</p>
                <p>Telepon: (021) 12345678</p>
                <p>Instagram: <a href="https://www.instagram.com/p/C-BynSGy5yhuxfEDGVvMQau6OapXtfNFCezUEE0/?igsh=MTc4bDVycDkwZjg1aA==">@fayed_exe</a></p>
            </div>
        </section>

        <section>
            <div class="kolom">
                <h2>Lokasi Kami</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509839!2d144.95373531531838!3d-37.81627997975147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f0c7b4f%3A0x5045675218ceed30!2sYour%20Location!5e0!3m2!1sen!2sus!4v1616161616161" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>

        <section>
            <div class="kolom">
                <h2>Data dari Database</h2>
                <?php
                // hubungin database
                include 'koneksi.php';

                // Query untuk mendapatkan data dari tabel contact
                $query = "SELECT * FROM contact";
                $result = $conn->query($query);

                // ngecek hasil
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<h1>" . htmlspecialchars($row["name"]) . "</h1>";
                        echo "<p>" . htmlspecialchars($row["email"]) . "</p>";
                        echo "<p>" . htmlspecialchars($row["message"]) . "</p>";
                    }
                } else {
                    echo "<p>Tidak ada pesan yang tersedia.</p>";
                }

                // nutup koneksi database
                $conn->close();
                ?>
            </div>
        </section>
    </main>

    <footer>
        <div class="wrapper">
            < p>&copy; <?php echo date("Y"); ?> Portofolio Pribadi</p>
        </div>
    </footer>
</body>

</html>