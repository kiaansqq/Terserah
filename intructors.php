<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            INSTRUCTORS
        </div>
        <?php
        include 'proses/connect.php'; 
        
        $sql = "SELECT * FROM instructors"; 
        $result = $conn->query($sql);
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Instructors</title>
            <link rel="stylesheet" href="assets/css/style.css"> <!-- Sesuaikan dengan path CSS Anda -->
        </head>

        <body>
            <div id="main-content">
                <h3>Daftar Instructors</h3>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Instructor ID</th>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Lessons ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["instructor_id"] . "</td>";
                                echo "<td>" . $row["user_id"] . "</td>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["lessons_id"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Tidak ada instructor tersedia</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <?php
            $conn->close(); 
            ?>
        </body>

        </html>

    </div>
</div>