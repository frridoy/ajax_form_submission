<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Student List</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
    Student Create
  </button>

  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Age</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>john@example.com</td>
          <td>28</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Modal Form -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form id="student-form">
      @csrf
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="studentName">Name</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
            </div>

            <div class="form-group">
              <label for="studentEmail">Email address</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email">
            </div>

            <div class="form-group">
              <label for="studentAge">Age</label>
              <input type="number" id="age" name="age" class="form-control" placeholder="Enter your age">
            </div>

            <div class="form-group">
              <label for="course">Course</label>
              <select class="form-control" id="course" name="course">
                <option value="" disabled selected>Select your course</option>
                <option value="science">Science</option>
                <option value="arts">Arts</option>
                <option value="commerce">Commerce</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="student_submit">Save</button>
          </div>
        </div>
      </div>
    </form>
  </div>

</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Include external JS for form handling -->
<script src="{{ asset('js/student.js') }}"></script>
</body>
</html>
