<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GREENWARE</title>
  <link rel="shortcut icon" type="image/png" href="/inventory_greenware/assets/images/logos/Greenwarelogo.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <style>
 #loginForm input[type="email"]:hover,
#loginForm input[type="password"]:hover {
    border-color: green !important; border-width: 2px;
}

#loginForm button:hover {
    background-color: yellow !important;
    border-color: yellow !important;
    color: green;
}
.page-wrapper{
  background-color: lightgray;
}
  </style>
}
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
               <a class="text-nowrap logo-img text-center d-block py-3 w-100">
                 <img src="/inventory_greenware/assets/images/logos/Greenwarelogo.png" width="150" alt="" />
                   <div class="mb-3">
                    <h1 style="text-align: center; font-family:serif ;">GREENWARE</h1>
                  </div>
                </a>
                   <form id="loginForm" action="/inventory_greenware/admin/index.php">
                  <div class="mb-3">
                    <h4 style="text-align: center;">Log in as Admin</h4>
                  </div>
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" required>
                  </div>
                      <div class="d-flex align-items-center justify-content-between mb-4">
                    <a class="text-primary fw-bold" href="/inventory_greenware/admin/forgotpass.php">Forgot Password?</a>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" style="background-color: green; border-color: green;">Sign In</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
      var email = document.getElementById("exampleInputEmail1").value;
      var password = document.getElementById("exampleInputPassword1").value;
      
      if (!email || !password) {
        event.preventDefault(); // Prevent form submission
        alert("Email and password are required.");
      }
    });
  </script>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>