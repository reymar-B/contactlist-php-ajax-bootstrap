<div class="modal fade bg-dark" id="contacts-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: rgb(170, 250, 246);">
      <h3 class="text-center m-3" id="exampleModalLabel"> Edit </h3>
      <div class="modal-body">
      <!--Modal Body -->
      <form action="/test" method="POST">
        <!-- Error message -->
        <p id="up-err-message"> </p>
        <div class="m-3">
          <input id="up-id" type="hidden" class="form-control" >
          <label for="Name" class="form-label">Name</label>
          <input id="up-name" type="text" class="form-control" >
        </div>
        <div class="m-3">
          <label for="email" class="form-label">Email address</label>
          <input id="up-email" type="email" class="form-control" id="email" aria-describedby="emailHelp" >
        </div>
        <div class="m-3">
          <label for="phone" class="form-label">Phone</label>
          <input id="up-phone" type="text" class="form-control" >
        </div>
      </form>
      <!-- Modal Body -->
      </div>
      <div class="modal-footer">
        <button id="btn-exit" type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Exit </button>
        <button id="del-contacts" type="button" class="btn btn-danger" > Delete </button>
        <button id="upContacts" type="submit" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#confirm"> Update </button>
      </div>
    </div>
  </div>
</div>
