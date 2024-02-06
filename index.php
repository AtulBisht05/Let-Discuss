<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Let-Discuss</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <?php include "components/_nav.php"; ?>
    <?php include "components/_dbconnect.php"; ?>

        <!--  slider  -->
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/2400x700/?frontend,coding,language" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Let-Discuss - Browse Categories</h5>
                        <p>Ready to Browse.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/900x400/?modern,technology" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Let-Discuss - Browse Categories</h5>
                        <p>Ready to Browse.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/900x400/?backend,coding,language" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Let-Discuss - Browse Categories</h5>
                        <p>Ready to Browse.</p>
                    </div>
                </div>
            </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <hr>
    </div>
    <!-- fetch info-->
    <div class="row">

        <?php
    $sql= "SELECT * FROM `categories`";
    $result= mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
        //echo ''.$row["category_id"]." ".$row["category_name"]." ".$row["category_description"].'';
   

    echo '
            <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/500x400/?'.$row['category_name'].',coding" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">'.$row["category_name"].'</h5>
                    <p class="card-text">'.substr($row["category_description"],0,80).'....</p>
                    <a href="#" class="btn btn-primary">View Threads</a>
                    </div>
                </div>
            </div>';
    }


    ?>
    </div>
    <?php include "components/_footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>