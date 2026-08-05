<?php

declare(strict_types=1);

// Long polling endpoint untuk jumlah slot kosong
set_time_limit(35); // beri sedikit buffer terhadap timeout loop
header('Content-Type: application/json; charset=utf-8');

include __DIR__ . '/../logic/koneksi.php';

if (!$koneksi) {
  http_response_code(500);
  echo json_encode(['error' => 'Database connection failed']);
  exit;
}

$timeout = 25; // detik maksimum long polling
$start = time();
$last_total = isset($_GET['last_total']) ? (int) $_GET['last_total'] : -1;

// prepared statement tidak diperlukan untuk COUNT tanpa user input,
// tetap cek error handling pada query
$sql = "SELECT COUNT(*) AS total FROM slot_parkir WHERE status = 'kosong'";

while (true) {
  if (connection_aborted()) {
    break;
  }

  $result = mysqli_query($koneksi, $sql);
  if ($result === false) {
    http_response_code(500);
    echo json_encode(['error' => 'Query failed']);
    break;
  }

  $row = mysqli_fetch_assoc($result);
  $current_total = isset($row['total']) ? (int) $row['total'] : 0;

  if ($current_total !== $last_total) {
    echo json_encode(['total' => $current_total]);
    break;
  }

  if ((time() - $start) >= $timeout) {
    // kirim empty response agar client dapat re-poll
    echo json_encode((object)[]);
    break;
  }

  // tidur singkat untuk mengurangi beban DB; 200ms cukup responsif
  usleep(200000);
}

mysqli_close($koneksi);
