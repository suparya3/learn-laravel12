<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Teacher</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Welcome To My Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/teacher">Teacher</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/student">Student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/class">Class</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/major">Major</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Title -->
    <div class="container mt-4">
      <h2 class="text-center">Student Data</h2>

      <!-- Teacher Data Table -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Class</th>
            <th scope="col">Major</th>
            <th scope="col">Phone</th>
          </tr>
        </thead>
        <tbody>
          <!-- Sample Data, you can dynamically populate this with your server data -->
          <tr>
            <th scope="row">1</th>
            <td>John Doe</td>
            <td></td>
            <td>Computer Science</td>
            <td>+1234567890</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jane Smith</td>
            <td>Science</td>
            <td>Information Technology</td>
            <td>+0987654321</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>David Brown</td>
            <td>English</td>
            <td>Software Engineering</td>
            <td>+1122334455</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
