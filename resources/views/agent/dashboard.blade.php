@extends('layouts.app')

@section('styles')
<style>
    body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
    }

    .header {
        background-color: #1a1a1a;
        color: white;
        padding: 20px;
    }

    .card-custom {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .stats-card {
        background-color: #fff;
        padding: 20px;
        margin: 10px 0;
        text-align: center;
        border-radius: 10px;
    }

    .stats-card h4 {
        margin-bottom: 10px;
    }

    .stats-card p {
        font-size: 24px;
        font-weight: bold;
    }

    .table-custom {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .footer {
        background-color: #ff4d4d;
        color: white;
        padding: 20px;
        text-align: center;
    }

    .navbar-custom {
        background-color: #ff4d4d;
        padding: 10px 20px;
    }

    .navbar-custom a {
        color: white;
        margin: 0 15px;
        text-decoration: none;
    }

    .navbar-custom a:hover {
        color: #fff;
        text-decoration: underline;
    }

    .login-btn {
        background-color: #ff4d4d;
        border: none;
        padding: 5px 15px;
        color: white;
        border-radius: 5px;
    }

    .subscribe-btn {
        background-color: #ff4d4d;
        border: none;
        padding: 10px 20px;
        color: white;
        border-radius: 5px;
    }

    @media (max-width: 768px) {
        .stats-card p {
            font-size: 18px;
        }

        .table-custom {
            font-size: 14px;
        }

        .navbar-custom a {
            margin: 0 5px;
            font-size: 14px;
        }

        .footer input {
            width: 100%;
            margin-bottom: 10px;
        }

        .footer .subscribe-btn {
            width: 100%;
        }
    }

    @media (max-width: 576px) {
        .header h2 {
            font-size: 24px;
        }

        .card-custom h4 {
            font-size: 18px;
        }

        .stats-card {
            margin: 5px 0;
            padding: 10px;
        }

        .table-custom th,
        .table-custom td {
            padding: 8px;
        }
    }
</style>

@section('content')
<div class="header">
    <h2>Agent Dashboard</h2>
    <p>Home / Dashboard</p>
</div>

<div class="container mt-4">
    <div class="row mt-4">
        <!-- Sidebar (Right) -->
        <div class="col-12 col-md-3">
            <div class="list-group mb-4">
                <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action">My Orders</a>
                <a href="#" class="list-group-item list-group-item-action">My Wishlist</a>
                <a href="#" class="list-group-item list-group-item-action">Orders Details</a>
                <a href="#" class="list-group-item list-group-item-action">Reset Password</a>
                <a href="#" class="list-group-item list-group-item-action">Edit Profile</a>
            </div>
            <!-- Empty space below the sidebar -->
            <div style="height: 100%;"></div>
        </div>

        <!-- Main Content (Left) -->
        <div class="col-12 col-md-9 mb-4">
            <div class="card card-custom p-3 mb-4">
                <h1>Account Information</h1>
                <hr>
                <p><strong>User:</strong> user@gmail.com</p>
                <p><strong>Phone:</strong> 34534534534 <strong>Fax:</strong> 34534534534</p>
                <p><strong>City:</strong> Test City <strong>Zip:</strong> 3100 <strong>Address:</strong> Test Address</p>
            </div>
            <div class="row mb-4">
                <div class="col-4 col-md-4">
                    <div class="stats-card" style="background-color: #ffebee;">
                        <h4>Total Ad Posted</h4>
                        <p>120</p>
                    </div>
                </div>
                <div class="col-4 col-md-4">
                    <div class="stats-card" style="background-color: #e8eaf6;">
                        <h4>Total Ad Review</h4>
                        <p>160</p>
                    </div>
                </div>
                <div class="col-4 col-md-4">
                    <div class="stats-card" style="background-color: #e8f5e9;">
                        <h4>Total Revenue</h4>
                        <p>210</p>
                    </div>
                </div>
            </div>
            <div class="card card-custom p-3 table-custom">
                <h4>Recent Orders</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Order number</th>
                            <th>Date</th>
                            <th>Total Order Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#mz01</td>
                            <td>2020-04-21</td>
                            <td>Reject</td>
                            <td><button class="btn btn-danger">Details</button></td>
                        </tr>
                        <tr>
                            <td>#mz02</td>
                            <td>2020-04-21</td>
                            <td>Complete</td>
                            <td><button class="btn btn-danger">Details</button></td>
                        </tr>
                        <tr>
                            <td>#mz03</td>
                            <td>2020-04-21</td>
                            <td>Pending</td>
                            <td><button class="btn btn-danger">Details</button></td>
                        </tr>
                        <tr>
                            <td>#mz01</td>
                            <td>2020-04-21</td>
                            <td>Reject</td>
                            <td><button class="btn btn-danger">Details</button></td>
                        </tr>
                        <tr>
                            <td>#mz02</td>
                            <td>2020-04-21</td>
                            <td>Complete</td>
                            <td><button class="btn btn-danger">Details</button></td>
                        </tr>
                        <tr>
                            <td>#mz06</td>
                            <td>2020-04-21</td>
                            <td>Pending</td>
                            <td><button class="btn btn-danger">Details</button></td>
                        </tr>
                        <tr>
                            <td>#mz07</td>
                            <td>2020-04-21</td>
                            <td>Pending</td>
                            <td><button class="btn btn-danger">Details</button></td>
                        </tr>
                        <tr>
                            <td>#mz08</td>
                            <td>2020-04-21</td>
                            <td>Pending</td>
                            <td><button class="btn btn-danger">Details</button></td>
                        </tr>
                        <tr>
                            <td>#mz09</td>
                            <td>2020-04-21</td>
                            <td>Pending</td>
                            <td><button class="btn btn-danger">Details</button></td>
                        </tr>
                        <tr>
                            <td>#mz20</td>
                            <td>2020-04-21</td>
                            <td>Pending</td>
                            <td><button class="btn btn-danger">Details</button></td>
                        </tr>
                        <tr>
                            <td>#mz21</td>
                            <td>2020-04-21</td>
                            <td>Pending</td>
                            <td><button class="btn btn-danger">Details</button></td>
                        </tr>
                        <tr>
                            <td>#mz22</td>
                            <td>2020-04-21</td>
                            <td>Pending</td>
                            <td><button class="btn btn-danger">Details</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<div class="footer text-center">
    <img src="https://via.placeholder.com/30" alt="Bookapp Logo" style="margin-right: 10px;">
    <p>Bookapp</p>
    <p>live@example.com +999 23 33 8555</p>
    <div class="social-icons">
        <i class="bi bi-facebook"></i>
        <i class="bi bi-twitter"></i>
        <i class="bi bi-instagram"></i>
    </div>
    <div class="mt-3">
        <input type="email" class="form-control w-25 d-inline-block" placeholder="Enter email here...">
        <button class="subscribe-btn">Subscribe</button>
    </div>
    <div class="mt-3">
        <a href="#">Home</a> | <a href="#">About</a> | <a href="#">Services</a> | <a href="#">Shops</a> | <a href="#">Contact</a>
    </div>
    <p class="mt-3">Copyright ©2025 Bookapp. All Rights Reserved</p>
</div>
@endsection