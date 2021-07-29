<div class="modal fade bg-dark" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: rgb(170, 250, 246);">
        <h3 class="text-center m-3" id="exampleModalLabel"> Profile </h3>
        <div class="modal-body">
        <!--Modal Body -->
        <form action="/test" method="POST">
            <!-- Error message -->
            <p id="up-err-message"> </p>
            <div class="m-3">
            <input id="p-id" type="hidden" class="form-control" >
            <label for="first-name" class="form-label"> first name</label>
            <input id="p-fname" type="text" class="form-control" >
            </div>
            <div class="m-3">
            <label for="last-ame" class="form-label"> last name</label>
            <input id="p-lname" type="text" class="form-control" >
            </div>
            <div class="m-3">
            <label for="address" class="form-label"> address </label>
            <input id="p-address" type="text" class="form-control" aria-describedby="emailHelp" >
            </div>
            <div class="m-3">
            <label for="phone" class="form-label"> phone </label>
            <input id="p-phone" type="text" class="form-control" >
            </div>
        </form>
        <!-- Modal Body -->
        </div>
        <div class="modal-footer">
            <button id="" type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Exit </button>
            <button id="" type="button" class="btn btn-danger" > Delete </button>
            <button id="" type="submit" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#confirm"> Update </button>
        </div>
        </div>
    </div>
</div>
