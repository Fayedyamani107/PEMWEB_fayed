<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects - Fayed's Portfolio</title>
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
                <li><a href="contact.php">Contact</a></li> 
                <li><a href="experience.php">Experience</a></li> 
            </ul>
        </nav>
    </header>

    <!-- SECTION PROJECT -->
    <section id="Projects" class="projects">
        <div class="content-wrapper">
            <div class="kolom">
                <p class="deskripsi">Project page</p>
                <h2>This is My Project Page</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ea doloribus, reiciendis quisquam distinctio enim ipsa accusantium fugit eveniet? Odio doloremque necessitatibus earum minus corrupti nobis mollitia accusamus ipsa sapiente.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ea doloribus, reiciendis quisquam distinctio enim ipsa accusantium fugit eveniet? Odio doloremque necessitatibus earum minus corrupti nobis mollitia accusamus ipsa sapiente.</p>
            </div>
            <img src="https://img.freepik.com/free-vector/html5-programming-internet-website-development-web-application-engineering-script-writing-html-code-optimization-programmer-fixing-bugs-concept-illustration_335657-2025.jpg?t=st=1728530601~exp=1728534201~hmac=e7ecc4525314c3142decb7b2cd6a263621297ec60891838c069fbbcfd69b95c1&w=740"
                alt="Project Illustration" />
        </div>
    </section>

    <!-- LIST OF PROJECTS FROM DATABASE -->
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

        // ngambil data dari tabel projects
        $query = "SELECT * FROM projects";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li><strong>" . $row["title"] . "</strong>";
                echo "<p>" . $row["description"] . "</p></li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No projects available at the moment.</p>";
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