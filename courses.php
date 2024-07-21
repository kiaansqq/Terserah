    <div class="col-lg-9 mt-2">
        <div class="card">
            <div class="card-header">
                COURSES
                <?php
                include 'proses/connect.php'; 


                $sql = "SELECT * FROM courses"; 
                $result = $conn->query($sql);
                ?>

                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Courses</title>
                </head>

                <body>
                    <div id="main-content">
                        <h2>Courses List</h2>
                        <table border="1">
                            <thead>
                                <tr>
                                    <th>Course ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Lessons ID</th>
                                    <th>Instructor ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["course_id"] . "</td>";
                                        echo "<td>" . $row["title"] . "</td>";
                                        echo "<td>" . $row["description"] . "</td>";
                                        echo "<td>" . $row["lessons_id"] . "</td>";
                                        echo "<td>" . $row["instructor_id"] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>Tidak ada kursus tersedia</td></tr>";
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