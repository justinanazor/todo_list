
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <button id="closemodalbtn4" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                <div class='text-center mt-3'><h2>Let's go!</h2></div>
                <div class="container">
                    <div class="container mt-3 px-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <form action="register.php" method="POST"> <!-- Step 1 & 2 -->
                                        <div>
                                            <p class="m-0">Full name</p>
                                            <input name="username" class="form-control me-1" type="text" placeholder="Jhon Doe" aria-label="text" required>
                                        </div>
                                        <div>
                                            <p class="m-0">Email</p>
                                            <input name="email" class="form-control me-2" type="email" placeholder="example@site.com" aria-label="Email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputPassword6" class="form-label m-0">Choose Password</label>
                                            <input name="password" type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpBlock" required>
                                        </div>
                                        
                                        <div class="row mt-3">
                                            <div class="col-md-12 text-center">
                                                <button name="register" class="btn btn-success mt-3 rounded-corner" id="playwithteru_btn" type="submit">Play with Teru</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">Already playing with Teru? <b data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Login</b></div>
                    </div>
                    <div class="modal-footer text-center">
                        <p class="form_txt" style="padding-right: 30px;">By clicking this button, you have agreed to our terms of service and privacy policies</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

