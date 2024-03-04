<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css"> <!-- Your custom CSS file -->
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top shadow">

        <div class="container">
            <a class="navbar-brand" href="#">My Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron jumbotron-fluid text-white bg-primary">
        <div class="container">
            <h1 class="display-4">Blog</h1>
            <p class="lead">Explore amazing articles and stories from our community.</p>

        </div>
    </header>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Blog Image">
                    <div class="card-body">
                        <h2 class="card-title">Blog Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non dapibus
                            mauris. Vestibulum dapibus arcu at vestibulum. Sed nec aliquam elit, nec tempus ipsum. Donec
                            tempus est a nulla posuere, non sollicitudin justo bibendum. Fusce feugiat nisi nisi, vitae
                            bibendum enim elementum id. Integer nec erat ac est consequat vehicula. Nulla a nisl nec
                            eros viverra maximus a et arcu. Cras tempor ligula nec lacus dapibus, eget rhoncus mauris
                            aliquet. In aliquam diam eu mauris faucibus, at condimentum nulla vehicula. Nam malesuada
                            erat et accumsan sollicitudin. Nunc ac metus a dolor hendrerit bibendum nec a elit. Sed a
                            eros id sapien condimentum euismod. Nullam nec ante pharetra, condimentum sapien vel, auctor
                            orci.</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <span class="text-muted">Likes: 100</span>
                            </div>
                            <div class="col">
                                <span class="text-muted">Views: 1000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4>Comments</h4>
                        <div class="media mt-3">
                            <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="User Image">
                            <div class="media-body">
                                <h5 class="mt-0">User Name</h5>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non dapibus mauris.
                            </div>
                        </div>
                        <div class="media mt-3">
                            <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="User Image">
                            <div class="media-body">
                                <h5 class="mt-0">User Name</h5>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non dapibus mauris.
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form>
                            <div class="form-group">
                                <label for="comment">Leave a Comment</label>
                                <textarea class="form-control" id="comment" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Sidebar -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Related Blogs</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#">Related Blog 1</a></li>
                            <li class="list-group-item"><a href="#">Related Blog 2</a></li>
                            <li class="list-group-item"><a href="#">Related Blog 3</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>


    <footer class="py-4 bg-dark text-white">
        <div class="container text-center">
            <p>&copy; 2024 My Blog. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>