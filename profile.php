<?php
if (!isset($_COOKIE['User'])) {
    header('Location: login.php');
    exit;
}

$user = htmlspecialchars($_COOKIE['User']);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Gunya</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    body {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }
    
    .container {
        background: white;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        padding: 40px;
        width: 100%;
        max-width: 500px;
        animation: fadeIn 0.5s ease-out;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    h1 {
        color: #333;
        text-align: center;
        margin-bottom: 30px;
        font-size: 28px;
        position: relative;
        padding-bottom: 15px;
    }
    
    h1:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background: linear-gradient(to right, #667eea, #764ba2);
        border-radius: 2px;
    }
    
    form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    
    input {
        padding: 15px;
        border: 2px solid #e1e1e1;
        border-radius: 10px;
        font-size: 16px;
        transition: all 0.3s;
    }
    
    input:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }
    
    button {
        background: linear-gradient(to right, #667eea, #764ba2);
        color: white;
        border: none;
        padding: 16px;
        border-radius: 10px;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        margin-top: 10px;
    }
    
    button:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    }
    
    p[style*="color:red"],
    p[style*="color:green"] {
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
        font-weight: 500;
        text-align: center;
    }
    
    p[style*="color:red"] {
        background: rgba(255, 0, 0, 0.1);
        border-left: 4px solid #ff4757;
    }
    
    p[style*="color:green"] {
        background: rgba(46, 204, 113, 0.1);
        border-left: 4px solid #2ecc71;
    }
    
    .hello {
        color: #667eea;
        text-align: center;
        font-size: 32px;
        padding: 40px 20px;
    }
    
    a {
        color: #667eea;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s;
    }
    
    a:hover {
        color: #764ba2;
        text-decoration: underline;
    }
    
    @media (max-width: 600px) {
        .container {
            padding: 30px 20px;
        }
        
        h1 {
            font-size: 24px;
        }
        
        input, button {
            padding: 14px;
        }
    }
</style>
</head>
<body>
    <div class="container">
        <h1 class="hello">
            Привет, <?php echo $user; ?>
        </h1>
        <div style="text-align: center; margin-top: 30px;">
            <a href="logout.php" style="color: #666; font-size: 14px;">Выйти</a>
        </div>
    </div>
</body>
</html>
