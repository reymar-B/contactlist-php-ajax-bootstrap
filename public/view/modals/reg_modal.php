<div class="modal fade" id="register-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: rgb(170, 250, 246);">
        <h3 class="text-center m-3" id="exampleModalLabel"> Register </h3>
      <div class="modal-body">
<!------------------ Modal Body ------------------------------------------------------->
      <form action="/test" method="POST">
        <p id="reg-message"> </p>
        <div class="m-3">
          <label for="f-name" class="form-label"> first name</label>
          <input id="f_name" type="text" class="form-control" >
        </div><div class="m-3">
          <label for="l-name" class="form-label"> last name </label>
          <input id="l_name" type="text" class="form-control" >
        </div><div class="m-3">
          <label for="address" class="form-label"> address </label>
          <input id="address" type="text" class="form-control" >
        </div><div class="m-3">
          <label for="phone" class="form-label"> phone </label>
          <input id="phone" type="text" class="form-control" >
        </div>
        <div class="m-3">
          <label for="email" class="form-label">Email</label>
          <input id="reg_email" type="email" class="form-control" id="email" aria-describedby="emailHelp" >
        </div>
        <div class="m-3">
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