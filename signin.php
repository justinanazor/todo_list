<!-- Your login form -->
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button id="closemodalbtn4" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class='text-center mt-3'><h2>Login</h2></div>
      <div class="container">
        <div class="container mt-3 px-2">
          <form action="login.php" method="POST"> <!-- Form submits to login.php -->
            <div class="row">
              <div class="col-md-12">
                <p>Email</p>
                <input name="email" class="form-control me-2" type="email" placeholder="example@site.com" aria-label="Email" required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label for="inputPassword6" class="form-label">Password</label>
                <input name="password" type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpBlock" required>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-12 text-center">
                <button name="login" class="btn btn-success mt-3 rounded-corner" id="playwithteru_btn" type="submit">Login</button>
              </div>
            </div>
          </form>
        </div>
        <div class="text-center">Don't have an account? <b data-bs-toggle="modal" data-bs-target="#exampleModal">Sign Up</b></div>
      </div>
      <div class="modal-footer text-center">
        <p class="form_txt" style="padding-right: 30px;">By clicking this button you agree to our terms of service and privacy policies</p>
      </div>
    </div>
  </div>
</div>
