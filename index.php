<?php
// Daftar file yang tersedia di folder 'files'
$files = [
    'files/file1.php',
    'files/file2.php',
    'files/file3.php',
    'files/file4.php',
    'files/file5.php',
];

// Pilih file secara acak
$randomFile = $files[array_rand($files)];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Iframe</title>
</head>
<body>
    <h1>Iframe Random</h1>
    <iframe src="<?php echo htmlspecialchars($randomFile); ?>" width="800" height="600" style="border:none;"></iframe>
</body>
</html>
