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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/plugins/selectric.css">
  <link rel="stylesheet" href="assets/css/plugins/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="assets/css/plugins/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="assets/css/plugins/daterangepicker.css">
  <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
  <!--CSS Libraries for updates-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- style for products-->
   <!-- Favicons -->
	 <link href="img/letter-a-icon-png-8847.png" rel="icon">
	 <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/products/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/products/owl.carousel.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/products/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/products/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/products/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/products/responsive.css">
  <!-- end style for products-->
  <style>

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
            <div class="section-header-back">
              <a href="features-posts.html" class="btn btn-icon"></a>
            </div>
            <h1>products</h1>
            <div class="section-header-breadcrumb">

            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">products</h2>
            <p class="section-lead">
             you can update ,delete and Add ...
            </p>
            <a href="#" class="cart-btn" id="add-new-product-btn">+ Add new product</a> <br> <br>
            <!-- hidden products-->
<div id="add-product-form" style="display: none;">
  <input type="text" id="product-name" placeholder="Product name">
  <input type="text" id="product-price" placeholder="Product price">
  <input type="file" id="product-image" accept="image/*">
  <button id="add-product-submit">OK</button>
</div><br> <br>
<!-- hidden products-->
            <div class="row product-lists">
              <div class="col-lg-4 col-md-6 text-center strawberry">
                <div class="single-product-item">
                  <div class="product-image">
                    <a href="single-product.html"><img id="product-image" src="assets/img/img/seeds/seeds1.jpg" alt=""></a>
                  </div>
                  <h3 id="product-name">seed1</h3>
                  <p class="product-price"><span>Per Kg</span> 85$ </p>
                  <a href="#" class="cart-btn" onclick="showUpdateFields()">Update</a>
                  <a href="#" class="cart-btn" onclick="handleDeleteClick()">Delete</a>
                </div>
              </div>
              <!-- div hidden for updates-->
              <div id="popup-overlay" class="modal" style="display: none;">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Update Product</h5>
                      <button type="button" class="close" onclick="hidePopup()">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <input type="file" id="new-image" class="form-control" accept="image/*">
                      <input type="text" id="new-name" class="form-control" placeholder="Enter new name">
                      <input type="text" id="new-price" class="form-control" placeholder="Enter new price">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" onclick="handleUpdateClick()">Confirm Update</button>
                      <button type="button" class="btn btn-secondary" onclick="hidePopup()">Cancel</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- /div hidden for updates-->
              <div class="col-lg-4 col-md-6 text-center berry">
                <div class="single-product-item">
                  <div class="product-image">
                    <a href="single-product.html"><img src="assets/img/img/tools/tool2.jpg" alt=""  height="30%"></a>
                  </div>
                  <h3>tool2</h3>
                  <p class="product-price"><span>Per Kg</span> 70$ </p>
                  <a href="#" class="cart-btn"> Update</a> <a href="#" class="cart-btn"> delete </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 text-center lemon">
                <div class="single-product-item">
                  <div class="product-image">
                    <a href="single-product.html"><img src="assets/img/img/seeds/seeds12.jpg"></a>
                  </div>
                  <h3>medicines</h3>
                  <p class="product-price"><span>Per Kg</span> 35$ </p>
                  <a href="#" class="cart-btn"> Update</a> <a href="#" class="cart-btn"> delete </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                  <div class="product-image">
                    <a href="single-product.html"><img src="assets/img/img/tools/tool2.jpg" alt=""></a>
                  </div>
                  <h3>tool</h3>
                  <p class="product-price"><span>Per Kg</span> 50$ </p>
                  <a href="#" class="cart-btn"> Update</a> <a href="#" class="cart-btn"> delete </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                  <div class="product-image">
                    <a href="single-product.html"><img src="assets/img/img/tools/tool3.jpg" alt=""></a>
                  </div>
                  <h3>tool3</h3>
                  <p class="product-price"><span>Per Kg</span> 45$ </p>
                  <a href="#" class="cart-btn"> Update</a> <a href="#" class="cart-btn"> delete </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 text-center strawberry">
                <div class="single-product-item">
                  <div class="product-image">
                    <a href="single-product.html"><img src="assets/img/img/seeds/seeds12.jpg" alt=""></a>
                  </div>
                  <h3>seed</h3>
                  <p class="product-price"><span>Per Kg</span> 80$ </p>
                  <a href="#" class="cart-btn"> Update</a> <a href="#" class="cart-btn"> delete </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 text-center strawberry">
                <div class="single-product-item">
                  <div class="product-image">
                    <a href="single-product.html"><img src="assets/img/img/seeds/seeds12.jpg" alt=""></a>
                  </div>
                  <h3>seed1</h3>
                  <p class="product-price"><span>Per Kg</span> 85$ </p>
                  <a href="#" class="cart-btn"> Update</a> <a href="#" class="cart-btn"> delete </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 text-center berry">
                <div class="single-product-item">
                  <div class="product-image">
                    <a href="single-product.html"><img src="assets/img/img/tools/tool2.jpg" alt=""  height="30%"></a>
                  </div>
                  <h3>tool2</h3>
                  <p class="product-price"><span>Per Kg</span> 70$ </p>
                  <a href="#" class="cart-btn update" onclick="handleUpdateButtonClick(event, 1)">Update</a>
                  <a href="#" class="cart-btn delete" onclick="handleDeleteButtonClick(event, 1)">Delete</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 text-center lemon">
                <div class="single-product-item">
                  <div class="product-image">
                    <a href="single-product.html"><img src="assets/img/img/tools/tool2.jpg"></a>
                  </div>
                  <h3>medicines</h3>
                  <p class="product-price"><span>Per Kg</span> 35$ </p>
                  <a href="#" class="cart-btn"> Update</a> <a href="#" class="cart-btn"> delete </a>
                </div>
              </div>

            </div>

            </div>



            <div class="row">
              <div class="col-lg-12 text-center">
                <div class="pagination-wrap">
                  <ul>
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a class="active" href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">Next</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end products -->
  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="assets/js/plugins/summernote-bs4.js"></script>
  <script src="assets/js/plugins/jquery.selectric.min.js"></script>
  <script src="assets/js/plugins/jquery.uploadPreview.min.js"></script>
  <script src="assets/js/plugins/bootstrap-tagsinput.min.js"></script>
  <script src="assets/js/plugins/bootstrap-timepicker.min.js"></script>
  <script src="assets/js/plugins/daterangepicker.js"></script>
  <script src="assets/js/plugins/select2.full.min.js"></script>
   <!-- JS Libraies for updates -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/features-post-create.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/forms-advanced-forms.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!--Script for hidden products-->
  <script>
  // Get the necessary elements
  const addNewProductBtn = document.getElementById('add-new-product-btn');
  const addProductForm = document.getElementById('add-product-form');
  const addProductSubmitBtn = document.getElementById('add-product-submit');

  // Add event listener to the add new product button
  addNewProductBtn.addEventListener('click', function() {
    // Show the add product form
    addProductForm.style.display = 'block';
  });

  // Add event listener to the add product submit button
  addProductSubmitBtn.addEventListener('click', function() {
    // Get the field values
    const productName = document.getElementById('product-name').value;
    const productPrice = document.getElementById('product-price').value;
    const productImage = document.getElementById('product-image').files[0];

    // Create the new product element
    const newProduct = document.createElement('div');
    newProduct.classList.add('col-lg-4', 'col-md-6', 'text-center', 'strawberry');

    // Create the image element, read the selected file, and set it as src
    const productImageElement = document.createElement('img');
    const reader = new FileReader();
    reader.onload = function(e) {
      productImageElement.src = e.target.result;
    };
    reader.readAsDataURL(productImage);

    // Add the image element to the new product element
    const productImageContainer = document.createElement('div');
    productImageContainer.classList.add('product-image');
    productImageContainer.appendChild(productImageElement);

    // Add the remaining elements of the new product
    const productNameElement = document.createElement('h3');
    productNameElement.textContent = productName;

    const productPriceElement = document.createElement('p');
    productPriceElement.classList.add('product-price');
    productPriceElement.innerHTML = `<span>Per Kg</span> ${productPrice}`;

    const updateBtnElement = document.createElement('a');
    updateBtnElement.href = '#';
    updateBtnElement.classList.add('cart-btn');
    updateBtnElement.textContent = 'Update';

    const deleteBtnElement = document.createElement('a');
    deleteBtnElement.href = '#';
    deleteBtnElement.classList.add('cart-btn');
    deleteBtnElement.textContent = 'Delete';

    const productItemElement = document.createElement('div');
    productItemElement.classList.add('single-product-item');
    productItemElement.appendChild(productImageContainer);
    productItemElement.appendChild(productNameElement);
    productItemElement.appendChild(productPriceElement);
    productItemElement.appendChild(updateBtnElement);
    productItemElement.appendChild(deleteBtnElement);

    newProduct.appendChild(productItemElement);

    // Add the new product after all existing products
    const productList = document.querySelector('.product-lists');
    productList.appendChild(newProduct);

    // Reset the input field values
    document.getElementById('product-name').value = '';
    document.getElementById('product-price').value = '';
    document.getElementById('product-image').value = '';

    // Hide the add product form
    addProductForm.style.display = 'none';
  });
  // script for update and delete
  function showUpdateFields() {
    var popupOverlay = document.getElementById("popup-overlay");
    popupOverlay.style.display = "block";
  }

  function handleUpdateClick() {
    var newImageInput = document.getElementById("new-image");
    var newNameInput = document.getElementById("new-name");
    var newPriceInput = document.getElementById("new-price");

    var newImage = newImageInput.files[0]; // الحصول على الملف المحدد

    var newName = newNameInput.value;
    var newPrice = newPriceInput.value;

    if (newImage || newName || newPrice) {
      if (newImage) {
        var reader = new FileReader();
        reader.onload = function(event) {
          var productImage = document.getElementById("product-image");
          productImage.setAttribute("src", event.target.result);
        };
        reader.readAsDataURL(newImage);
      }

      if (newName) {
        var productName = document.getElementById("product-name");
        productName.innerText = newName;
      }

      if (newPrice) {
        var productPrice = document.querySelector(".product-price");
        productPrice.innerHTML = "<span>Per Kg</span> " + newPrice + "$";
      }

      hidePopup();
    }
  }

  function hidePopup() {
    var popupOverlay = document.getElementById("popup-overlay");
    popupOverlay.style.display = "none";
  }

  function handleDeleteClick() {
    var confirmDelete = confirm("Are you sure you want to delete this product?");

    if (confirmDelete) {
      var productItem = document.querySelector(".single-product-item");
      productItem.remove();
    }
  }
</script>
</body>
</html>

