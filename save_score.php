<?php
include 'db.php';

// Mengambil data JSON dari request
$data = json_decode(file_get_contents('php://input'), true);

$user_name = $data['user_name'];
$points = $data['points'];

$response = ['status' => 'error'];

// Pastikan user_name dan points tidak kosong
if (!empty($user_name) && isset($points)) {
    // Menyimpan skor ke dalam database
    $sql = "INSERT INTO scores (user_name, points) VALUES ($1, $2)";
    $result = pg_query_params($conn, $sql, [$user_name, $points]);

    if ($result) {
        // Ambil scoreboard terbaru
        $scoreboardQuery = "SELECT user_name, points, created_at FROM scores ORDER BY points DESC";
        $scoreboardResult = pg_query($conn, $scoreboardQuery);
        $scoreboard = [];

        while ($row = pg_fetch_assoc($scoreboardResult)) {
            $scoreboard[] = $row;
        }

        $response['status'] = 'success';
        $response['scoreboard'] = $scoreboard;
    } else {
        $response['message'] = pg_last_error($conn);
    }
} else {
    $response['message'] = 'Nama pengguna atau poin tidak valid.';
}

pg_close($conn);
echo json_encode($response);
?>
