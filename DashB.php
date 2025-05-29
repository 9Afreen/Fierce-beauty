<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Beauty Academy Dashboard</title>
  <link rel="stylesheet" href="DashB.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
</head>
<body>
  <div class="dashboard-container">
    <aside class="sidebar">
      <h2>Beauty Academy</h2>
      <nav>
        <a href="DashB.html" class="active">Dashboard</a>
        <a href="MyCourses.html">My Courses</a>
        <a href="Profile.html">Profile</a>
        <a href="logout.html">Logout</a>
      </nav>
    </aside>
      <?php
            include('connection.php');
            $sel = "SELECT * FROM signup";
            $query = mysqli_query($conn, $sel);
            $result = mysqli_fetch_assoc($query) 

      ?>


    <main class="main-content">
      <header>
        <h1>Welcome! <?php echo $result['username']; ?> </h1>
        <p>Here’s your beauty academy dashboard overview.</p>
      </header>

      <section class="cards">
        <div class="card">
          <h3>Next Class</h3>
          <p>Makeup Mastery - Apr 30, 2PM</p>
        </div>
        
        <div class="card">
          <h3>Upcoming Event</h3>
          <p>Hair Styling Workshop - Jul 5</p>
        </div>
      </section>
    </main>
  </div>
</body>
</html>
