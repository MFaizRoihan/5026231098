<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muhammad Faiz Roihan : 5026231098</title>

    <!-- Add link to Google Fonts for Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        body {
            background-color: #f4f7fa;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Styling for the header */
        .header {
            background-color: #007bff; /* Blue background color */
            color: white; /* White text color */
            text-align: center;
            padding: 20px 0;
            font-size: 2rem;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header span {
            color: #ffdf00; /* Yellow color for "Kode Pegawai" */
        }

        .navbar {
            margin-top: 30px; /* Added margin-top to prevent overlap with the header */
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border-radius: 8px;
        }

        .navbar-nav .nav-item {
            margin-left: 20px;
        }

        .navbar-nav .nav-link {
            font-size: 1.1rem;
            font-weight: 600;
            color: #555;
            transition: all 0.3s ease;
            display: flex;
            align-items: center; /* Aligns icons and text */
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
            text-decoration: underline;
        }

        .navbar-nav .nav-link i {
            margin-right: 8px; /* Adds space between the icon and text */
        }

        .container {
            margin-top: 40px;
        }

        .nav-item a {
            text-transform: uppercase;
        }

        @media (max-width: 768px) {
            .navbar-nav {
                text-align: center;
                margin-top: 10px;
            }
            .navbar-nav .nav-item {
                margin-left: 0;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <!-- Header with colored "Kode Pegawai" -->
    <div class="header">
        <span>5026231098</span> - Muhammad Faiz Roihan
    </div>

    <nav class="navbar navbar-expand-sm bg-light navbar-light mx-4 py-3">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/frontend"><i class="fas fa-code"></i> All Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai"><i class="fas fa-users"></i> Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/minyakgoreng"><i class="fas fa-cogs"></i> Tugas CRUD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-book"></i> EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan"><i class="fas fa-chalkboard-teacher"></i> Latihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-chalkboard-teacher"></i> Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-chalkboard-teacher"></i> Latihan 3</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
