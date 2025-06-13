<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        form {
            max-width: 300px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
       <div class="form-row">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your Username">
            </div>
            
            <div class="form-row">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your Password">
            </div>
            
            <div class="button-container">
                <button type="submit" class="btn btn-login" onclick="alert('Login clicked'); return false;">Login</button>
                <button type="reset" class="btn btn-reset">Reset</button>
            </div>
</body>
</html>