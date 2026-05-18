<?php
$env = getenv('APP_ENV') ?: 'development';
$host = gethostname();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Test PHP App</title>
    <style>
        body { font-family: Arial; margin: 40px; background: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 8px; }
        .info { background: #e9ecef; padding: 10px; margin: 10px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>✅ PHP App is running!</h1>
        <div class="info">
            <strong>Environment:</strong> <?= htmlspecialchars($env) ?><br>
            <strong>Container hostname:</strong> <?= htmlspecialchars($host) ?><br>
            <strong>PHP version:</strong> <?= phpversion() ?>
        </div>
        <p>This application is served via Nginx + PHP-FPM inside Docker containers.</p>
        <hr>
        <a href="info.php">phpinfo()</a>
    </div>
</body>
</html>
