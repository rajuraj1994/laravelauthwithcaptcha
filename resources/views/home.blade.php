<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- fontawesome cdn link css -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Dashboard</title>
</head>

<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-end">
            <div class="col-md-1 mt-3">
                <button class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    Menu
                </button>
                <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width:300px;">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel"> Dashboard</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none text-white">Dashboard</a></li>
                            <li><a href="#" class="text-decoration-none text-white">Users</a></li>
                            <li><a href="#" class="text-decoration-none text-white">Total Products</a></li>
                            <li><a href="#" class="text-decoration-none text-white">Favorite Categories</a></li>
                            <li><a href="#" class="text-decoration-none text-white">Total Orders</a></li>
                        </ul>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none text-white">
                                    <b>Name : </b> {{Auth::user()->name}}
                                </a></li>
                            <li><a href="#" class="text-decoration-none text-white">
                                    <b>Email : </b> {{Auth::user()->email}}
                                </a></li>
                        </ul>
                        
                        <a href="{{ route('userlogout') }}" class="btn btn-warning text-decoration-none">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h2 class="text-center my-3 text-muted">
             User Dashboard
        </h2>
        <div class="row d-flex">
            <div class="col-md-6 col-xl-4 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow border-0 py-2">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-primary fw-bold text-xs mb-1 text-center">
                                        <span>
                                            Total Orders
                                        </span>
                                    </div>
                                    <div class="text-secondary fw-bold mb-0 text-center">
                                        <span>Delivered:20</span>
                                    </div>
                                    <div class="col-auto text-center">
                                        <i class="fab fa-first-order-alt fs-1 text-success fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-4 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow border-0 py-2 bg-warning">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-light fw-bold text-xs mb-1 text-center">
                                        <span>
                                            Total Time for Users
                                        </span>
                                    </div>
                                    <div class="text-secondary fw-bold mb-0 text-center">
                                        <span>Deactivated: 0</span>
                                    </div>
                                    <div class="col-auto text-center">
                                        <i class="fas fa-users fs-1 text-success"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-4 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow border-0 py-2 bg-success">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-light fw-bold text-xs mb-1 text-center">
                                        <span>
                                            Total Products
                                        </span>
                                    </div>
                                    <div class="text-warning fw-bold mb-0 text-center">
                                        <span>Out of Stock: 0</span>
                                    </div>
                                    <div class="col-auto text-center">
                                        <i class="fas fa-globe fs-1 text-light"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-4 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow border-0 py-2 bg-danger">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-light fw-bold text-xs mb-1 text-center">
                                        <span>
                                            Total Sales
                                        </span>
                                    </div>
                                    <div class="text-white fw-bold mb-0 text-center">
                                        <span>Booking: 0</span>
                                    </div>
                                    <div class="col-auto text-center">
                                        <i class="fas fa-globe fs-1 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-4 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow border-0 py-2 bg-primary">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-light fw-bold text-xs mb-1 text-center">
                                        <span>
                                            Admins
                                        </span>
                                    </div>
                                    <div class="text-white fw-bold mb-0 text-center">
                                        <span>Super Admin: 1</span>
                                    </div>
                                    <div class="col-auto text-center">
                                        <i class="fas fa-users fs-1 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-4 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow border-0 py-2 bg-dark">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-light fw-bold text-xs mb-1 text-center">
                                        <span>
                                           Favourite Categories
                                        </span>
                                    </div>
                                    <div class="text-white fw-bold mb-0 text-center">
                                        <span>Sub-Categories: 0</span>
                                    </div>
                                    <div class="col-auto text-center">
                                        <i class="fas fa-globe fs-1 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>




    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>
