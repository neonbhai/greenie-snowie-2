<?php
// Lightweight 404 handler - no includes to avoid bundling issues
http_response_code(404);
header('Content-Type: text/html; charset=utf-8');

// Simple 404 response without any external dependencies
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>404 - Page Not Found</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
        h1 { color: #333; }
        p { color: #666; }
    </style>
</head>
<body>
    <h1>404 - Page Not Found</h1>
    <p>The requested page could not be found.</p>
</body>
</html>';
?>
