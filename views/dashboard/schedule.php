<?php
global $role, $schedule;


$schedule = $schedule->getSchedule();



?>

<!-- Schedule -->
<h1 class="text-dark fs-2">🕘 Your Schedule</h1>
<hr>

<div class="list-group">
  <?php foreach ($schedule as $key) { ?>
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?php echo $key["NamaKegiatan"] ?></h5>
        <small><?php echo "📅" . $key["Tanggal"]  ?></small>
      </div>
      <p class="mb-1"><?php echo "👨🏻‍🤝‍👨🏻" . "Mahasiswa: " . $key["NamaMahasiswa"] ?></p>
      <p class="mb-1"><?php echo "👩🏻‍🏫" . "Dosen: " . $key["NamaDosen"] ?></p>
    </a>
  <?php } ?>

</div>