@extends('admin.layouts.master')
@section('main-content')
    <div id="view-dashboard">
        <!-- Dashboard Stats -->
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                <div class="card stat-card bg-primary">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">Total Users</h6>
                                <h2 class="card-text">5,248</h2>
                                <p class="card-text"><small><i class="bi bi-arrow-up"></i> 18% since last
                                        month</small></p>
                            </div>
                            <i class="bi bi-people"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                <div class="card stat-card bg-success">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">Revenue</h6>
                                <h2 class="card-text">$24,981</h2>
                                <p class="card-text"><small><i class="bi bi-arrow-up"></i> 12% since last
                                        month</small></p>
                            </div>
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                <div class="card stat-card bg-warning">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">Orders</h6>
                                <h2 class="card-text">1,428</h2>
                                <p class="card-text"><small><i class="bi bi-arrow-up"></i> 8% since last
                                        month</small></p>
                            </div>
                            <i class="bi bi-cart"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                <div class="card stat-card bg-info">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">Conversion Rate</h6>
                                <h2 class="card-text">4.25%</h2>
                                <p class="card-text"><small><i class="bi bi-arrow-down"></i> 2% since last
                                        month</small></p>
                            </div>
                            <i class="bi bi-graph-up"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="row">
            <div class="col-xl-8 col-lg-7 mb-4">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Sales Overview</h5>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 mb-4">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Traffic Sources</h5>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="trafficChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity & Top Products -->
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Recent Activity</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">New order received</h6>
                                    <small class="text-muted">Order #3245 for $128.90</small>
                                </div>
                                <span class="badge bg-primary rounded-pill">2m ago</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">Customer registered</h6>
                                    <small class="text-muted">John Doe joined the platform</small>
                                </div>
                                <span class="badge bg-primary rounded-pill">1h ago</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">Payment processed</h6>
                                    <small class="text-muted">Payment of $59.20 was processed</small>
                                </div>
                                <span class="badge bg-primary rounded-pill">3h ago</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">New review received</h6>
                                    <small class="text-muted">Product "Wireless Headphones" got 5
                                        stars</small>
                                </div>
                                <span class="badge bg-primary rounded-pill">1d ago</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Top Products</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Sold</th>
                                        <th>Profit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Wireless Headphones</td>
                                        <td>$189.99</td>
                                        <td>142</td>
                                        <td>$12,342</td>
                                    </tr>
                                    <tr>
                                        <td>Smart Watch</td>
                                        <td>$279.99</td>
                                        <td>98</td>
                                        <td>$10,987</td>
                                    </tr>
                                    <tr>
                                        <td>Bluetooth Speaker</td>
                                        <td>$89.99</td>
                                        <td>214</td>
                                        <td>$8,542</td>
                                    </tr>
                                    <tr>
                                        <td>Phone Charger</td>
                                        <td>$29.99</td>
                                        <td>387</td>
                                        <td>$5,432</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
