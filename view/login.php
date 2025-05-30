<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: rgb(219, 169, 194);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .phone-container {
            width: 100%;
            max-width: 400px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header-section h1 {
            margin: 0;
        }
        .form-section {
            padding: 20px;
        }
        .input-field {
            margin-bottom: 15px;
        }
        .input-field label { 
            display: block;
            margin-bottom: 5px;
        }
        .input-field input {
            width: calc(100% - 20px);
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .login-button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .login-button {
            background-color: rgb(75, 112, 233);
            color: white;
            border-radius: 30px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .links-container {
            display: flex;
            justify-content: space-between;
        }
        </style>
</head>
<body>
    <main>
        <div class="phone-container">
            <a href="#" class="back-button">&lt;</a>
        
             <div class="header-section">
            <img src="5.png" alt="500" class="imagen pequeña" style="width: 200px; height: 100px;"
            />
            </div>
            <div class="form-section">
                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="input-field">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="login-button-container">
                    <div class="login-text">Sign in</div>
                    <button type="submit" class="login-button" aria-label="Sign in">
                        <span>iniciar sesion</span>
                    </button>
                </div>
    
                <div class="links-container">
                    <a href="#" class="forgot-link">olvido la contrasela</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>