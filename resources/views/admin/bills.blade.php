<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Invoice Management</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th, table td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    table th {
      background-color: #f2f2f2;
    }

    .user-details {
      display: none;
    }

    .user-details table {
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="main-wrapper">
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
      <div class="form-inline mr-auto"></div>
      <ul class="navbar-nav navbar-right">
        
      </ul>
    </nav>
    <div class="main-sidebar sidebar-style-2">
      <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
          <a href="index.html">Agri Pharm</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
          <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item active">
              <a href="index.html" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Dropdown</span></a>
              <ul class="dropdown-menu" style="display: none;">
                <li><a class="nav-link" href="">test</a></li>

              </ul>
            </li>
            <li class="menu-header">Features</li>

            <li><a class="nav-link" href="user.html"><i class="far fa-square"></i> <span>users</span></a></li>
            <li><a class="nav-link" href="products.html"><i class="far fa-square"></i> <span>Products

            </span></a></li>

            <li><a class="nav-link" href="offers.html"><i class="far fa-square"></i> <span>Offers</span></a></li>

            <li><a class="nav-link" href="bills.html"><i class="far fa-square"></i> <span>bills</span></a></li>
            <li><a class="nav-link" href="auth-register.html"><i class="far fa-square"></i> <span>Register</span></a></li>
            <li><a class="nav-link" href="auth-forgot-password.html"><i class="far fa-square"></i> <span>Forgot password</span></a></li>

          </ul>
      </aside>
    </div>
 <!-- Main Content -->
 <div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Invoice Management System</h1>
     
    </div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            

            <table>
              <thead>
                <tr>
                  <th>User</th>
                  <th>Number of Invoices</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="#" onclick="showUserDetails(this)">User 1</a></td>
                  <td>3</td>
                </tr>
                <tr class="user-details">
                  <td colspan="2">
                    <table>
                      <thead>
                        <tr>
                          <th>Invoice Number</th>
                          <th>Amount</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>INV001</td>
                          <td>100.00</td>
                          <td>2024-03-18</td>
                        </tr>
                        <tr>
                          <td>INV002</td>
                          <td>150.00</td>
                          <td>2024-03-19</td>
                        </tr>
                        <tr>
                          <td>INV003</td>
                          <td>200.00</td>
                          <td>2024-03-20</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td><a href="#" onclick="showUserDetails(this)">User 2</a></td>
                  <td>2</td>
                </tr>
                <tr class="user-details">
                  <td colspan="2">
                    <table>
                      <thead>
                        <tr>
                          <th>Invoice Number</th>
                          <th>Amount</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>INV004</td>
                          <td>300.00</td>
                          <td>2024-03-21</td>
                        </tr>
                        <tr>
                          <td>INV005</td>
                          <td>150.00</td>
                          <td>2024-03-22</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          

          </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script>
    function showUserDetails(element) {
      var userDetails = element.nextElementSibling;
      userDetails.style.display = "table";
    }
  </script>
</body>
</html>
