<?php
session_start();

// Setelah pengguna berhasil login, disimpan dalam sesi
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contoh pengguna dan kata sandi yang sederhana
    $validUsername = 'aziz';
    $validPassword = 'aziz';

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION['loggedIn'] = true;
        header('Location: admin.html'); // Mengarahkan ke admin.html
        exit();
    } else {
        $error = 'Kredensial tidak valid.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f2f2f2; /* Warna background */
        }

        h1 {
            margin-bottom: 20px;
            color: #333; /* Warna teks judul */
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px;
            background-color: #ffffff; /* Warna background form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            margin-bottom: 10px;
            color: #333; /* Warna teks label */
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4caf50; /* Warna background tombol submit */
            color: white;
            cursor: pointer;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Animasi perubahan warna latar */
        }

        input[type="submit"]:hover {
            background-color: #45a049; /* Warna latar saat hover */
        }

        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Login</h1>

    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">
    </form>

    <?php if (isset($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
