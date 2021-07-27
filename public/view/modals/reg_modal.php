<div class="modal fade" id="register-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> Register </h5>
            </div>
            <div class="modal-body">
  <!------------------ Modal Body ------------------------------------------------------->
            <form action="/test" method="POST">
            <p id="reg-message"> </p>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="reg_email" type="email" class="form-control" id="email" aria-describedby="emailHelp" >
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="reg_password" type="password" class="form-control" >
              </div>
            </form>
  <!------------------ Modal Body ------------------------------------------------------->
            </div>
            <div class="modal-footer">
              <button id="cancel" type="button" class="btn btn-danger" data-bs-dismiss="modal"> Cancel </button>
              <button name="register" id="register" type="submit" class="btn btn-primary" > Register </button>
            </div>
          </div>
        </div>
      </div>
    </section>