<?php
include 'db.php';

$sql = "SELECT * FROM master_kata ORDER BY RANDOM() LIMIT 1"; 
$result = pg_query($conn, $sql);

if ($result) {
    $row = pg_fetch_assoc($result);
    echo json_encode([
        'kata' => $row['kata'], 
        'clue' => $row['clue']  
    ]);
} else {
    echo json_encode(['error' => 'Tidak ada data']);
}
pg_close($conn);
?>
