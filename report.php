<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            REPORT
        </div>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Laporan</title>
            <link rel="stylesheet" href="styles.css">
        </head>

        <body>
            <header>
                <h1>Laporan Bulanan</h1>
            </header>
            <main>
                <section class="summary">
                    <h2>Ringkasan</h2>
                    <div class="card">
                        <h3>Jumlah Pengguna</h3>
                        <p>150</p>
                    </div>
                    <div class="card">
                        <h3>Jumlah Pelajaran</h3>
                        <p>10</p>
                    </div>
                    <div class="card">
                        <h3>Jumlah Kelas</h3>
                        <p>12</p>
                    </div>
                </section>

                <section class="report-details">
                    <h2>Detail Laporan</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Pengguna</th>
                                <th>Jumlah Kelas</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Saskia</td>
                                <td>5</td>
                                <td>Aktif</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Lady</td>
                                <td>3</td>
                                <td>Non-Aktif</td>
                            </tr>

                        </tbody>
                    </table>
                </section>

                <section class="charts">
                    <h2>Grafik Statistik</h2>
                    <div class="chart">
                        <canvas id="userChart"></canvas>
                    </div>
                </section>
            </main>

            <footer>
                <p>&copy; 2024 Laporan Kursus </p>
            </footer>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="script.js"></script>
        </body>

        </html>

    </div>
</div>