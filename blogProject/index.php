<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Simple Blog</a>
            <!-- Add your navigation links here -->
        </div>
    </nav>

    <div class="container">
        <!-- Display your blog posts here -->
        <h2 class="mt-4 mb-4">Latest Blogs</h2>
        <!-- Example blog card -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Blog Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <a href="singleblog.php?id=1" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <!-- Add more blog cards as needed -->

    </div>

    <footer>
        <div class="container">
            <p>&copy; 2023 Simple Blog. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies (Include at the end of the body for better performance) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SYIY6Ij46tMp93Kg2dP8jl+Gk1JQ6b4U5lFkin"
        crossorigin="anonymous"></script>
</body>

</html>