<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/css/plugins/summernote-bs4.css">
  <link rel="stylesheet" href="assets/css/plugins/selectric.css">
  <link rel="stylesheet" href="assets/css/plugins/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="assets/css/plugins/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="assets/css/plugins/daterangepicker.css">
  <link rel="stylesheet" href="assets/css/plugins/select2.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="assets/css/styleuser.css">
  </head>

<body>
  <div id="app">
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

      <!--main content-->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Users</h1>
          </div>

  <div class="admin-table">
    <table id="user-table">
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Last Login Date</th>
        <th>Purchase Count</th>
        <th>Remaining Debt</th>
        <th>Actions</th>
      </tr>
      <tr>
        <td>1</td>
        <td><input type="text" value="JohnDoe"></td>
        <td><input type="text" value="2022-01-15"></td>
        <td><input type="text" value="5"></td>
        <td><input type="text" value="$50.00"></td>
        <td><button class="edit-btn">Edit</button><button class="delete-btn">Delete</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td><input type="text" value="JaneSmith"></td>
        <td><input type="text" value="2022-01-20"></td>
        <td><input type="text" value="3"></td>
        <td><input type="text" value="$30.00"></td>
        
          <td><button class="edit-btn">Edit</button><button class="delete-btn">Delete</button></td>
        
      </tr>
    <!-- Add more rows for other users -->
    </table>
    <button class="add-user-btn">Add New User</button>
    </div>
    <script src="jsuser.js"></script>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <!-- JS Libraies -->
  <script src="assets/js/plugins/summernote-bs4.js"></script>
  <script src="assets/js/plugins/jquery.selectric.min.js"></script>
  <script src="assets/js/plugins/jquery.uploadPreview.min.js"></script>
  <script src="assets/js/plugins/bootstrap-tagsinput.min.js"></script>
  <script src="assets/js/plugins/bootstrap-timepicker.min.js"></script>
  <script src="assets/js/plugins/daterangepicker.js"></script>
  <script src="assets/js/plugins/select2.full.min.js"></script>


  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/features-post-create.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/forms-advanced-forms.js"></script>
  <script>
     const addUserBtn = document.querySelector('.add-user-btn');
  const userTable = document.getElementById('user-table');

  addUserBtn.addEventListener('click', function() {
    // Get the last ID
    const lastId = parseInt(userTable.rows[userTable.rows.length - 1].cells[0].textContent);

    // Create a new row
    const newRow = userTable.insertRow();

    // Increment the ID
    const newId = lastId + 1;

    // Insert cells into the new row
    for (let i = 0; i < 6; i++) {
      const cell = newRow.insertCell(i);

      // Add input field for the first 5 cells
      if (i < 5) {
        const input = document.createElement('input');
        input.type = 'text';
        cell.appendChild(input);

        // Set default values for the first cell
        if (i === 0) {
          input.value = newId;
          input.disabled = true;
        }
      }

      // Add buttons for the last cell
      if (i === 5) {
        const editBtn = document.createElement('button');
        editBtn.classList.add('edit-btn');
        editBtn.textContent = 'Edit';

        const deleteBtn = document.createElement('button');
        deleteBtn.classList.add('delete-btn');
        deleteBtn.textContent = 'Delete';

        cell.appendChild(editBtn);
        cell.appendChild(deleteBtn);
      }
    }
  });
  </script>
</body>
</html>
