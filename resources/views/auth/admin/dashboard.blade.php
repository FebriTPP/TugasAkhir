<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-danger fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">!N Aware</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-danger" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">ADMIN</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <form action="/admin" method="GET">
                                <button type="submit" class="btn btn-danger">Home</button>
                            </form>
                        </li>
                        {{-- <li class="nav-item">
                            <form action="/map" method="GET">
                                <button type="submit" class="btn btn-danger">Map</button>
                            </form>
                        </li> --}}
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5 pt-5">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: auto;">
            <div class="card-header bg-light">
                <h4 class="mb-0">Daftar Bencana</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Bencana Alam</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Gempa</td>
                            <td>
                                <select class="form-select">
                                    <option>Bogor Timur</option>
                                    <option>Bogor Barat</option>
                                    <option>Bogor Selatan</option>
                                    <option>Bogor Utara</option>
                                    <option>Tanah Sereal</option>
                                </select>
                            </td>
                            <td class="d-flex justify-content-center"><button class="btn btn-danger">Send</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Tanah Longsor</td>
                            <td>
                                <select class="form-select">
                                    <option>Bogor Timur</option>
                                    <option>Bogor Barat</option>
                                    <option>Bogor Selatan</option>
                                    <option>Bogor Utara</option>
                                    <option>Tanah Sereal</option>
                                </select>
                            </td>
                            <td class="d-flex justify-content-center"><button class="btn btn-danger">Send</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tsunami</td>
                            <td>
                                <select class="form-select">
                                    <option>Bogor Timur</option>
                                    <option>Bogor Barat</option>
                                    <option>Bogor Selatan</option>
                                    <option>Bogor Utara</option>
                                    <option>Tanah Sereal</option>
                                </select>
                            </td>
                            <td class="d-flex justify-content-center"><button class="btn btn-danger">Send</button></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Gunung Meletus</td>
                            <td>
                                <select class="form-select">
                                    <option>Bogor Timur</option>
                                    <option>Bogor Barat</option>
                                    <option>Bogor Selatan</option>
                                    <option>Bogor Utara</option>
                                    <option>Tanah Sereal</option>
                                </select>
                            </td>
                            <td class="d-flex justify-content-center"><button class="btn btn-danger">Send</button></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Banjir</td>
                            <td>
                                <select class="form-select">
                                    <option>Bogor Timur</option>
                                    <option>Bogor Barat</option>
                                    <option>Bogor Selatan</option>
                                    <option>Bogor Utara</option>
                                    <option>Tanah Sereal</option>
                                </select>
                            </td>
                            <td class="d-flex justify-content-center"><button class="btn btn-danger">Send</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
