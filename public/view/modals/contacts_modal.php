<div class="modal fade bg-dark" id="contacts-add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: rgb(170, 250, 246);">
      <h3 class="text-center m-3" id="exampleModalLabel"> Add Contacts </h3>
      <div class="modal-body">
      <!-- Modal Body -->
      <form action="/test" method="POST">
      <!-- Error Message -->
        <p id="error-message"> </p>
        <div class="m-3">
          <label for="Name" class="form-label">Name</label>
          <input id="name" type="text" class="form-control">
        </div>
        <div class="m-3">
          <label for="email" class="form-label">Email address</label>
          <input id="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="m-3">
          <label for="phone" class="form-label">Phone</label>
          <input id="phone" type="text" class="form-control">
        </div>
      </form>
      <!-- Modal Body -->
      </div>
      <div class="modal-footer">
        <button id="addContacts-close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id="addContacts" type="submit" class="btn btn-primary" >Save changes</button>
      </div>
    </div>
  </div>
</div>