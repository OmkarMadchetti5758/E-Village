<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="dashboard.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <?php session_start(); ?>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");

    * {
      margin: 0;
      padding: 0;
      outline: none;
      border: none;
      text-decoration: none;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: #f0f5f0;
    }

    .container {
      display: flex;
    }

    .login {
      position: absolute;
      right: 50px;
      height: 40px;
      width: 8%;
      border-radius: 10px;
      background-color: black;
      color: white;
    }

    .login:hover {
      background-color: red;
      scale: 1.02;
    }

    .main {
      position: relative;
      padding: 20px;
      width: 100%;
    }

    .main-top {
      display: flex;
      width: 100%;
      justify-content: center;
    }

    .main-top p {
      font-size: 180%;
      font-weight: bold;
      color: seagreen;
    }

    .main-skills {
      display: flex;
      margin-top: 20px;
      justify-content: center;
      justify-content: space-evenly;
      margin-top: 70px;
    }

    .main-skills .card {
      width: 24%;
      /* margin: 10px; */
      height: 180px;
      text-align: center;
      background-color: #D3F8E1;
      border-radius: 10px;
      padding: 10px;
      box-shadow: 8px 8px 15px rgba(0, 0, 0, 0.3);
      border: 1px solid #a6f5c4;
    }

    .main-skills .card:hover {
      scale: 1.02;
      box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.3);
    }

    .main-skills .card h3 {
      margin-top: 30px;
      margin-bottom: 10px;
      text-transform: capitalize;
      color: seagreen;
    }

    .main-skills .card p {
      font-size: 12px;
    }

    .main-skills .card button {
      background-color: white;
      margin-top: 20px;
    }

    .main-skills .card button a {
      background: black;
      color: seagreen;
      padding: 7px 15px;
      border-radius: 8px;
      margin-top: 15px;
    }

    .main-skills .card button a:hover {
      background: seagreen;
      color: #D3F8E1;
      scale: 1.02;
    }

    .main-skills .card i {
      font-size: 25px;
      padding: 10px;
    }

    h4 {
      color: seagreen;
    }
  </style>
</head>
<title>Admin Panel</title>

<body>
  <div class="container">
    <section class="main">
      <div class="main-top">
        <p>Admin Panel</p>
      </div>
      <div>
        <h4>Hello Admin : <?php echo $_SESSION['name']; ?></h4>
        <a href="../Home/home.php"><button class="login">Logout</button></a>
        <!-- <button class="login">Logout</button> -->
      </div>
      <div class="main-skills">
        <div class="card">
          <i class="fa-solid fa-people-group"></i>
          <h3>Population</h3>
          <!-- <button><a href="#" style="color: white;" class="insert">Insert</a></button> -->
          <button><a href="../Admin/Population/update_population.php" style="color: white;">Manage</a></button>
          <!-- <button><a href="#" style="color: white;">Delete</a></button> -->
        </div>
        <div class="card" class="java"><i class="fa fa-school"></i>
          <h3>School</h3>
          <button><a href="../Admin/School/manage_school.php" style="color: white;">Manage</a></button>
        </div>
        <div class="card"><i class="fas fa-hospital"></i>
          <h3>Hospital</h3>
          <button><a href="../Admin/Hospital/update_hospital.php" style="color: white;">Manage</a></button>
        </div>
      </div>
      <div class="main-skills">
        <div class="card">
          <i class="fa-solid fa-calendar-days"></i>
          <h3>Event</h3>
          <button><a href="../Admin/Event/manage_event.php" style="color: white;">Manage</a></button>
        </div>
        <div class="card">
          <i class="fa-solid fa-calendar-check"></i>
          <h3>Notice</h3>
          <button><a href="../Admin/Notice/manage_notice.php" style="color: white;">Manage</a></button>
        </div>
        <div class="card">
          <i class="fa-solid fa-calendar-days"></i>
          <h3>Gallery</h3>
          <button><a href="../Admin/Gallery/manage_gal.php" style="color: white;">Manage</a></button>
        </div>
      </div>
      <div class="main-skills">
        <div class="card">
          <i class="fa-solid fa-user-tie"></i>
          <h3>Admin</h3>
          <button><a href="../Admin/manageAdmin/show_admin.php" style="color: white;">Manage</a></button>
        </div>

        <!-- <div class="card">
          <i class="fa-solid fa-calendar-check"></i>
          <h3>About</h3>
          <button><a href="#" style="color: white;">Update</a></button>
        </div> -->

      </div>
    </section>
  </div>
</body>

</html>