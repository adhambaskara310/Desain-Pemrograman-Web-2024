<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>
    <h2>Form Input</h2>

    <?php
    $input = "";
    $email = "";
    $emailErr = ""; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        if (!empty($_POST['email'])) {
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email yang diterima: " . $email . "<br>";
            } else {
                $emailErr = "Format email tidak valid!";
            }
        }

        echo "Input yang diterima: " . $input . "<br>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Masukkan teks:</label>
        <input type="text" name="input" id="input" value="<?php echo $input; ?>"><br><br>

        <label for="email">Masukkan email:</label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <span style="color:red;"><?php echo $emailErr; ?></span><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>
