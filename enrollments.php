<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            ENROLLMENTS
        </div>

        <?php
        include 'proses/connect.php'; 

        $sql = "SELECT * FROM enrollments"; 
        $result = $conn->query($sql);
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Enrollments</title>
        </head>

        <body>
            <div id="main-content">
                <h3>Daftar Enrollments</h3>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Enrollment ID</th>
                            <th>User ID</th>
                            <th>Course ID</th>
                            <th>Enrollment Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["enrollment_id"] . "</td>";
                                echo "<td>" . $row["user_id"] . "</td>";
                                echo "<td>" . $row["course_id"] . "</td>";
                                echo "<td>" . $row["enrollment_date"] . "</td>";
                                echo "<td>" . $row["status"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Tidak ada enrollment tersedia</td></tr>";
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