<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ip_domain = $_POST['domain'];
    $whois_result = shell_exec("whois $ip_domain");
    
    $_SESSION['whois_result'] = $whois_result;
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="container">

        <h1>Domain recon with whois</h1>
        <h2>In the world of cybersecurity, information about IP addresses plays a crucial role and can be exceptionally valuable for white hat hackers dedicated to securing information systems and networks. This information not only provides essential insights into network infrastructure but also serves as a key element in penetration testing, security monitoring, and the development of protective strategies.</h2>

        <form method="POST" action="">
            <label for="domain">Domain name/IP:</label>
            <input type="text" id="domain" name="domain" placeholder="8.8.8.8/example.com" required>
            <input type="submit" value="Submit">
        </form>

        <?php
        if (isset($_SESSION['whois_result'])) {
            echo "<pre>{$_SESSION['whois_result']}</pre>";
            unset($_SESSION['whois_result']);
            echo '<button onclick="copyToClipboard()">Copy Result</button>';
            echo '<button onclick="downloadResult()">Download Result</button>';
        }
        ?>
    </div>

    <script>
        function copyToClipboard() {
            var resultText = document.querySelector("pre").textContent;
            var tempInput = document.createElement("textarea");
            tempInput.value = resultText;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
        }
        
        function downloadResult() {
            var resultText = document.querySelector("pre").textContent;
            var blob = new Blob([resultText], { type: "text/plain" });
            var url = window.URL.createObjectURL(blob);
            var a = document.createElement("a");
            a.href = url;
            a.download = "whois_result.txt";
            a.style.display = "none";
            document.body.appendChild(a);
            a.click();
            window.URL.revokeObjectURL(url);
        }
    </script>

</body>

</html>
