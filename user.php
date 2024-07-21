<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            USER
        </div>
        <?php
        include 'proses/connect.php'; 

        $sql = "SELECT * FROM users"; 
        $result = $conn->query($sql);
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Users</title>
            <link rel="stylesheet" href="assets/css/style.css"> <!-- Sesuaikan dengan path CSS Anda -->
        </head>

        <body>
            <div id="main-content">
                <h3>Daftar Users</h3>
                <table border="1">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["user_id"] . "</td>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["gender"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["addres"] . "</td>";
                                echo "<td>" . $row["phone_number"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>Tidak ada user tersedia</td></tr>";
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