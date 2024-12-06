<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style external -->
    <?php if(isset($data['stylePage'])) : ?>
    <?= $data['stylePage']; ?>
    <?php endif; ?>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
	<link rel="stylesheet" href="<?= $data['style']; ?>">
    <title><?= $data['judul']; ?></title>
</head>
<body>