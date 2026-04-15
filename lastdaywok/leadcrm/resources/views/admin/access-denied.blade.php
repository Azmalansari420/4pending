<!DOCTYPE html>
<html>
<head>
    <title>Access Denied</title>
    <style>
        body { text-align: center; font-family: Arial, sans-serif; background: #f2f2f2; }
        .container { margin-top: 100px; }
        h1 { font-size: 80px; color: #e74c3c; }
        p { font-size: 24px; }
        a { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
        a:hover { background: #2980b9; }
    </style>
</head>
<body>
    <div class="container">
        <h1>403</h1>
        <p>Access Denied</p>
        <a href="{{ url()->previous() }}">Go Back</a>
    </div>
</body>
</html>
