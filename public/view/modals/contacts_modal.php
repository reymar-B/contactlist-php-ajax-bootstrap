


<div class="modal fade" id="contacts-add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> Add Contacts </h5>
            </div>
            <div class="modal-body">
  <!------------------ Modal Body ------------------------------------------------------->
            <form action="/test" method="POST">
              <div class="mb-3">
<!---------------------Error Message ------------------------------------------------------>
                <div id="error-message"> </div>
                
                <label for="Name" class="form-label">Name</label>
                <input id="name" type="text" class="form-control">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input id="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input id="phone" type="text" class="form-control">
              </div>
            </form>
  <!------------------ Modal Body ------------------------------------------------------->
            </div>
            <div class="modal-footer">
              <button id="addContacts-close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button id="addContacts" type="submit" class="btn btn-primary" >Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </section>