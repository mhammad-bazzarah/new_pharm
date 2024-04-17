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
  <!-- CSS Libraries for add offers -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <style>
  .img-gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
  }

  .mm {
    position: relative;
    width: 300px;
  }

  .mm img {
    width: 100%;
    height: auto;
  }

  .mm p {
    margin-top: 10px;
  }

  .mm .actions {
    position: absolute;
    bottom: 10px;
    right: 10px;
    display: flex;
    gap: 5px;
  }

  .mm .actions button {
    border-radius: 5px;
    background-color:#1dc8cd;

  }
  .add-btn{
    border-radius: 5px;
    background-color:#1dc8cd;
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
            <h1>Offers</h1>
           
          </div>
          <button class="add-btn" onclick="showPopup()">+Add new Offer</button><br><br>
<!-- for add-->
<div id="popup-overlay" class="modal" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Offer</h5>
        <button type="button" class="close" onclick="hidePopup()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="file" id="new-image" class="form-control" accept="image/*">
        <textarea id="new-text" class="form-control" placeholder="Enter offer text"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="addNewOffer()">OK</button>
        <button type="button" class="btn btn-secondary" onclick="hidePopup()">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!--/ for add-->
          <div class="section-body">
            <div class="img-gallery owl-carousel owl-theme">
              <div class="mm">
                <img src="assets/img/img/offers/offer1.jpg" alt="image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, sed!</p>
                <div class="actions">
                  <button class="edit-btn" onclick="showEditPopup(this)">Edit</button>
                  <button class="delete-btn" onclick="deleteOffer(this)">Delete</button>
                </div>
              </div>
           <!-- for updates-->
           <div id="edit-popup-overlay" class="modal" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Edit Offer</h5>
                  <button type="button" class="close" onclick="hideEditPopup()">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input type="file" id="edit-image" class="form-control" accept="image/*">
                  <textarea id="edit-text" class="form-control" placeholder="Enter offer text"></textarea>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="saveChanges()">Save Changes</button>
                  <button type="button" class="btn btn-secondary" onclick="hideEditPopup()">Cancel</button>
                </div>
              </div>
            </div>
          </div>
          <!--/ for updates-->
          
              <div class="mm">
                <img src="assets/img/img/offers/offer2.jpg" alt="image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, sed!</p> <div class="actions">
                  <button class="edit-btn">Edit</button>
                  <button class="delete-btn">Delete</button>
                </div>
              </div>
              <div class="mm">
                <img src="assets/img/img/offers/offer3.jpg" alt="image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, sed!</p>
                <div class="actions">
                  <button class="edit-btn">Edit</button>
                  <button class="delete-btn">Delete</button>
                </div>
              </div>
              <div class="mm">
                <img src="assets/img/img/offers/offer4.jpg" alt="image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, sed!</p>
                <div class="actions">
                  <button class="edit-btn">Edit</button>
                  <button class="delete-btn">Delete</button>
                </div>
              </div>
              <div class="mm">
                <img src="assets/img/img/offers/offer5.jpg" alt="image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, sed!</p>
                <div class="actions">
                  <button class="edit-btn">Edit</button>
                  <button class="delete-btn">Delete</button>
                </div>
              </div>
              <div class="mm">
                <img src="assets/img/img/offers/offer6.jpg" alt="image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, sed!</p>
                <div class="actions">
                  <button class="edit-btn">Edit</button>
                  <button class="delete-btn">Delete</button>
                </div>
              </div>
              

              

      </div> 
      
           
          </div>
        </section>
      </div>
     
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="assets/js/plugins/summernote-bs4.js"></script>
  <script src="assets/js/plugins/jquery.selectric.min.js"></script>
  <script src="assets/js/plugins/jquery.uploadPreview.min.js"></script>
  <script src="assets/js/plugins/bootstrap-tagsinput.min.js"></script>
  <script src="assets/js/plugins/bootstrap-timepicker.min.js"></script>
  <script src="assets/js/plugins/daterangepicker.js"></script>
  <script src="assets/js/plugins/select2.full.min.js"></script>
   <!-- JS Libraies for add -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/features-post-create.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/forms-advanced-forms.js"></script>
  <!--js for add  and update  offers-->
  <script>
    // add
    function showPopup() {
      var popupOverlay = document.getElementById("popup-overlay");
      popupOverlay.style.display = "block";
    }
  
    function addNewOffer() {
      var newImageInput = document.getElementById("new-image");
      var newText = document.getElementById("new-text").value;
  
      if (newImageInput.files.length > 0 && newText) {
        var newImage = newImageInput.files[0]; // الحصول على الملف المحدد
  
        var reader = new FileReader();
        reader.onload = function(event) {
          var gallery = document.querySelector(".img-gallery");
          var newOffer = document.createElement("div");
          newOffer.className = "mm";
          newOffer.innerHTML = `
            <img src="${event.target.result}" alt="image">
            <p>${newText}</p>
            <div class="actions">
              <button class="edit-btn">Edit</button>
              <button class="delete-btn">Delete</button>
            </div>
          `;
          gallery.appendChild(newOffer);
        };
        reader.readAsDataURL(newImage);
  
        hidePopup();
      }
    }
  
    function hidePopup() {
      var popupOverlay = document.getElementById("popup-overlay");
      popupOverlay.style.display = "none";
    }
    //update
    var currentEditItem = null;

function showEditPopup(button) {
  currentEditItem = button.closest(".mm");

  var editImageInput = document.getElementById("edit-image");
  var editText = document.getElementById("edit-text");

  var imageSrc = currentEditItem.querySelector("img").getAttribute("src");
  var textContent = currentEditItem.querySelector("p").textContent;

  editImageInput.value = null;
  editImageInput.setAttribute("data-current-image", imageSrc);
  editText.value = textContent;

  var editPopupOverlay = document.getElementById("edit-popup-overlay");
  editPopupOverlay.style.display = "block";
}

function saveChanges() {
  var editImageInput = document.getElementById("edit-image");
  var editText = document.getElementById("edit-text").value;

  if (currentEditItem && editText) {
    var currentImage = editImageInput.files[0];
    var currentImageSrc = editImageInput.getAttribute("data-current-image");

    if (currentImage) {
      var reader = new FileReader();
      reader.onload = function(event) {
        var imageElement = currentEditItem.querySelector("img");
        imageElement.setAttribute("src", event.target.result);
      };
      reader.readAsDataURL(currentImage);
    }

    var textElement = currentEditItem.querySelector("p");
    textElement.textContent = editText;

    hideEditPopup();
  }
}

function hideEditPopup() {
  var editPopupOverlay = document.getElementById("edit-popup-overlay");
  editPopupOverlay.style.display = "none";
}
//delete
function deleteOffer(button) {
  var confirmDelete = confirm("Are you sure you want to delete this offer?");

  if (confirmDelete) {
    var offerItem = button.closest(".mm");
    offerItem.remove();
  }
}
  </script>
  
</body>
</html>

