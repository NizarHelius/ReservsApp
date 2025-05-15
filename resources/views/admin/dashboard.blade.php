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

    .table-custom {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .navbar-custom {
        background-color: #343a40;
        padding: 10px 20px;
    }

    .navbar-custom a,
    .footer a {
        color: white;
        margin: 0 10px;
        text-decoration: none;
    }

    .footer {
        background: linear-gradient(180deg, #fff0f5 0%, #fff 100%);
        color: #888;
        padding: 60px 0 20px 0;
        text-align: center;
        border-top: 1px dashed #ccc;
        margin-top: 60px;
    }

    .footer .footer-logo {
        font-size: 2.5rem;
        color: #ff4b7d;
        margin-bottom: 10px;
    }

    .footer .footer-title {
        color: #ff4b7d;
        font-weight: 700;
        font-size: 2rem;
        margin-bottom: 0;
        display: inline-block;
        vertical-align: middle;
        margin-left: 10px;
    }

    .footer .footer-divider {
        width: 120px;
        border-top: 2px solid #bbb;
        margin: 20px auto;
    }

    .footer .footer-contact {
        font-size: 1.1rem;
        margin-bottom: 20px;
    }

    .footer .footer-social {
        margin-bottom: 25px;
    }

    .footer .footer-social a {
        display: inline-block;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 8px #ff4b7d22;
        color: #ff4b7d;
        font-size: 1.3rem;
        margin: 0 7px;
        width: 38px;
        height: 38px;
        line-height: 38px;
        text-align: center;
        transition: background 0.2s, color 0.2s;
    }

    .footer .footer-social a:hover {
        background: #ff4b7d;
        color: #fff;
    }

    .footer .footer-subscribe {
        margin-bottom: 25px;
    }

    .footer .footer-subscribe input[type="email"] {
        border: none;
        border-radius: 6px 0 0 6px;
        padding: 12px 18px;
        width: 220px;
        max-width: 60vw;
        outline: none;
        font-size: 1rem;
        box-shadow: 0 2px 8px #ff4b7d11;
    }

    .footer .footer-subscribe button {
        border: none;
        border-radius: 0 6px 6px 0;
        padding: 12px 28px;
        background: linear-gradient(90deg, #ff4b7d, #ff7b7d);
        color: #fff;
        font-weight: 600;
        font-size: 1rem;
        margin-left: -4px;
        box-shadow: 0 4px 16px #ff4b7d33;
        transition: background 0.2s;
    }

    .footer .footer-links {
        margin-bottom: 18px;
    }

    .footer .footer-links a {
        color: #888;
        margin: 0 18px;
        text-decoration: none;
        font-size: 1.08rem;
        transition: color 0.2s;
    }

    .footer .footer-links a:hover {
        color: #ff4b7d;
    }

    .footer .footer-copyright {
        color: #888;
        font-size: 1rem;
        margin-top: 10px;
    }

    .footer .footer-copyright .brand {
        color: #ff4b7d;
        font-weight: 600;
    }
</style>
<!-- Font Awesome CDN for social icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endsection

@section('content')
<div class="header">
    <h2>SAAS Admin Dashboard</h2>
    <p>Home / Admin Panel</p>
</div>

<div class="container mt-4">
    <div class="row mt-4">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="list-group mb-4">
                <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action">Manage Businesses</a>
                <a href="#" class="list-group-item list-group-item-action">Pending Business Approvals</a>
                <a href="#" class="list-group-item list-group-item-action">Subscriptions</a>
                <a href="#" class="list-group-item list-group-item-action">Users</a>
                <a href="#" class="list-group-item list-group-item-action">Reports</a>
                <a href="#" class="list-group-item list-group-item-action">Settings</a>
            </div>
        </div>

        <!-- Main content -->
        <div class="col-md-9 mb-4">
            <div class="card card-custom p-3 mb-4">
                <h4>Quick Stats</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="stats-card">
                            <h5>Total Businesses</h5>
                            <p>150</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stats-card">
                            <h5>Pending Approvals</h5>
                            <p>12</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stats-card">
                            <h5>Total Revenue</h5>
                            <p>$22,000</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-custom p-3 table-custom">
                <h4>Latest Registered Businesses</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Business Name</th>
                            <th>Owner Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hotel Lux</td>
                            <td>lux@owner.com</td>
                            <td>Pending</td>
                            <td><button class="btn btn-action">Review</button></td>
                        </tr>
                        <tr>
                            <td>BarberPro</td>
                            <td>barber@owner.com</td>
                            <td>Approved</td>
                            <td><button class="btn btn-action">View</button></td>
                        </tr>
                        <tr>
                            <td>Wedding Master</td>
                            <td>wedding@owner.com</td>
                            <td>Pending</td>
                            <td><button class="btn btn-action">Review</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<div class="footer">
    <div>
        <i class="fa-solid fa-laptop-code footer-logo"></i>
        <span class="footer-title">Bookapp</span>
    </div>
    <div class="footer-divider"></div>
    <div class="footer-contact">
        live@example.com<br>
        +999 22 33 5555
    </div>
    <div class="footer-social">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-dribbble"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
    <form class="footer-subscribe d-inline-flex justify-content-center align-items-center" onsubmit="return false;">
        <input type="email" placeholder="Enter email here..." required>
        <button type="submit">Subscribe</button>
    </form>
    <div class="footer-links">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Shops</a>
        <a href="#">Contact</a>
    </div>
    <div class="footer-copyright">
        Copyright &copy;2025 <span class="brand">Bookapp</span>. All Rights Reserved
    </div>
</div>
@endsection