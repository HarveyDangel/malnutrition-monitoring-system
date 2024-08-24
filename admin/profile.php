<?php
include 'header.php';
?>

<body class="bg-light-gray">
  <div class="container-fluid">
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="../assets/images/profile/user-1.jpg" class="card-img-top" alt="Profile Picture">
            <div class="card-body">
              <h5 class="card-title fw-semibold">Juan Dela Cruz</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Email:</strong>juandelacruz@gmail.com</li>
              <li class="list-group-item"><strong>Location:</strong>Naval, Biliran</li>

            </ul>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-body m-3">
              <h5 class="card-title">Personal Information</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Name:</strong> Carlito Benda</li>
                <li class="list-group-item"><strong>Date of Birth:</strong>February 13, 1997</li>
                <li class="list-group-item"><strong>Age:</strong>27</li>
                <li class="list-group-item"><strong>Gender:</strong>Male</li>
                <li class="list-group-item"><strong>Address:</strong>Busali Biliran, Biliran</li>
                <li class="list-group-item"><strong>Contact Number:</strong>09452375732</li>
              </ul>
              <div class="col-4 d-flex" style="padding: 20px;">
                <div style="padding:5px;">
                  <a href="users.php">
                    <button class="badge btn bg-primary rounded-3 fw-semibold">Back</button>
                  </a>
                </div>
                <div style="padding:5px;">
                  <a href="usersform.php">
                    <button class="badge btn bg-primary rounded-3 fw-semibold">Edit</button>
                  </a>
                </div>
                <div style="padding:5px;">
                  <a href="users.php">
                    <button class="badge btn bg-primary rounded-3 fw-semibold">Delete</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


<?php
include 'footer.php';
?>