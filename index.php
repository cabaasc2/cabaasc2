<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATIONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
     crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
           <div class="col-sm-8">
            <h1 class="fs-3 text-center ">Users Info</h1>
            <button class="btn btn-success m-1" id="addNew">Add New Student</button>
            <table class="table">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Action</th>

                    </tr>
                </thead>
            </table>
           </div> 
           <div class="modal" tabindex="-1" id="studentModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Users Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form >
            <div class="form-group m-2">
                 <input type="text" name="" id="studentId" class="form-control" placeholder="Enter student Id">
              </div>
            <div class="form-group m-2">
                  <input type="text" name="" id="studentName" class="form-control" placeholder="Enter student Name">
              </div>
            <div class="form-group m-2">
                  <input type="text" name="" id="studentClass" class="form-control" placeholder="Enter student Class">
              </div>

          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
        
      </div>
      
    </div>
  </div>
</div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
 crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
 crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>
</html>