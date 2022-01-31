<?php
$db = (new Database)->connect();
$schedule = new Schedule($db);

$emoji = "👨🏿‍🤝‍👨🏿📚";
$role = "student";
$user = "Charles";

$dashboard = isset($_GET['dashboard']) ? $_GET['dashboard'] : 'home';
?>
<div class="d-flex">

  <!-- Sidebar -->
  <div class="min-vh-100 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 250px;">
    <div class=" border p-2 pb-0 bg-secondary mb-3 rounded">
      <div class="d-flex justify-content-center align-items-center mb-2">
        <img src="https://stbm7resourcesprod.blob.core.windows.net/profilepicture/e37f6235-26f0-4f80-9f8f-956ffdf8eb66.jpg" alt="avatar" class="text-center rounded" />
      </div>
      <p class="fs-4"><?= $emoji ?></p>
      <ul class="list-unstyled pb-1 small">
        <li><?php echo $user; ?></li>
        <li>Undergraduate</li>
        <li>Binus University</li>
        <?php echo $dashboard ?>
      </ul>
    </div>
    <ul class="nav nav-pills flex-column mb-auto">


      <li class="nav-item">
        <a href="./?dashboard=home" class="nav-link  <?= $dashboard == 'home' ? 'active' : 'text-white'; ?>">
          <span>🏠</span>
          Home
        </a>
      </li>
      <li class="nav-item">
        <a href="./?dashboard=schedule" class="nav-link  <?= $dashboard == 'schedule' ? 'active' : 'text-white'; ?>">
          <span>📅</span>
          Schedule
        </a>
      </li>
      <li class="nav-item">
        <a href="./?dashboard=proposal" class="nav-link  <?= $dashboard == 'proposal' ? 'active' : 'text-white'; ?>">
          <span>📄</span>
          Proposal
        </a>
      </li>
      <li class="nav-item">
        <a href="./?dashboard=soft-hardcopy" class="nav-link  <?= $dashboard == 'soft-hardcopy' ? 'active' : 'text-white'; ?>">
          <span>📕</span>
          Soft/Hard-copy
        </a>
      </li>

    </ul>
  </div>


  <div class="w-100">
    <!-- Header -->
    <div class="d-flex align-items-center w-100 justify-content-between px-3 py-3 border-bottom">
      <h1 class="text-dark fs-4 mb-0">Welcome, <?= $user; ?>!</h1>
      <div id="time-now" class="text-secondary fs-6 mb-0"></div>
    </div>

    <!-- Content -->
    <div class="px-3 py-4">
      <?php include("dashboard/" . $dashboard . ".php"); ?>
    </div>
  </div>
</div>

<script>
  const timeNow = document.querySelector('#time-now');
  setInterval(() => {
    const now = new Date();
    timeNow.textContent = new Intl.DateTimeFormat('en-ID', {
      dateStyle: 'full',
      timeStyle: 'long'
    }).format(now).replace(/GMT.*/g, '');
  }, 1000);
</script>