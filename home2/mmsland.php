<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malnutrition Monitoring System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Link to external CSS -->
    <link href="mmsland.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Malnutrition Monitoring System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <h1>Malnutrition Monitoring System</h1>
            <p>A comprehensive solution for tracking and managing malnutrition data.</p>
            <a href="#" class="btn btn-light btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#loginModal">Sign In</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="feature">
                    <i class="fas fa-desktop"></i>
                    <h3>Real-time Monitoring</h3>
                    <p>Monitor malnutrition indicators in real-time to support data-driven decision-making.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <i class="fas fa-chart-line"></i>
                    <h3>Data Analytics</h3>
                    <p>Utilize advanced analytics to identify trends and allocate resources effectively.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <i class="fas fa-map-marked-alt"></i>
                    <h3>Geographical Mapping</h3>
                    <p>Map malnutrition hotspots with integrated GIS to enhance intervention strategies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="cta">
        <div class="container">
            <h2>Partner with Us</h2>
            <p>Collaborate with us in leveraging technology to improve health outcomes.</p>
            <a href="#" class="btn btn-md">Learn More</a>
        </div>
    </section>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Sign In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="userType" class="form-label">Select User Type</label>
                            <select class="form-select" id="userType" name="userType">
                                <option value="DOH">DOH</option>
                                <option value="PHO">PHO</option>
                                <option value="RHU">RHU</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
