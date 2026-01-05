<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dairy Farm Shop Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        <?php include './style.css';?>
    </style>
</head>
<body>
    <h1>Dairy Farm Shop Management System</h1>
    <hr>

    <!-- Bootstrap Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.shutterstock.com/image-vector/dairy-products-cheese-yoghurt-kid-260nw-1350450362.jpg" class="d-block w-100" height="300px" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="https://r-mart.co.in/images/thumbs/0014669_dairy%20product%20design%20604-01-min.jpeg" class="d-block w-100" height="300px" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOGzQ9KXqIOysmvKLCrQrhN9v0PI173_zZJzas9ZOlOKm7zOxF4wB-kBp6g9kkMqTZf_o&usqp=CAU" class="d-block w-100" height="300px" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="Registration">
        <h2>Registration</h2>
        <img src="https://thumbs.dreamstime.com/z/landscape-cow-milk-products-foreground-landscape-cow-milk-products-foreground-bright-color-funky-122174541.jpg" height="400px" width="500px">
        <form action="register1.php" method="post">
            <div class="reg">
                <input type="text" name="user_name" placeholder="Enter Name" required><br><br>
                <input type="text" name="mobile" placeholder="Mobile Number" required><br><br>
                <input type="text" name="cpassword" placeholder="Password" required><br><br>
                <input type="text" name="address" placeholder="Address" required><br><br>
                <input type="submit" name="register" class="register" value="Register Now">
            </div>
        </form>
        <br>
        Already a user? <a href="index.php">Login here</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
