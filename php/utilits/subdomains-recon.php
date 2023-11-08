<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['domain'])) {
    $domain = $_POST['domain'];
    $url = 'https://crt.sh/?q=%.' . $domain . '&output=json';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response !== false) {
        $data = json_decode($response, true);

        $subdomains = array_unique(array_column($data, 'name_value'));

        if (!empty($subdomains)) {
            $_SESSION['subdomains'] = $subdomains;
        }
    }
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

    <h1>Subdomain recon</h1>
    <h2>Searching for subdomains is an essential practice for ensuring the security and functionality of websites. This process allows the identification and management of various sections and services related to the main domain. It enhances security by uncovering potential vulnerabilities and helps efficiently manage resources and analyze user behavior. Subdomains are also used for expanding functionality and complying with legal requirements. This practice is an integral part of web resource management and ensuring their reliable operation.</h2>
    
    <form method="POST" action="">
      <label for="domain">Domain name:</label>
        <input type="text" id="domain" name="domain" placeholder="example.com" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_SESSION['subdomains'])) {
        echo "<h2>Results:</h2><pre id='results'>";
        foreach ($_SESSION['subdomains'] as $subdomain) {
            echo htmlspecialchars($subdomain) . "<br>";
        }
        echo "</pre><button class=\"copy-button\" onclick=\"copyResults()\">Copy Results</button>";
        echo "<button class=\"export-button\" onclick=\"exportResults('$domain')\">Export Results</button>";
    }
    ?>

<script>

    function copyResults() {

      var resultsText = document.getElementById('results').innerText;
      var textArea = document.createElement("textarea");

      textArea.value = resultsText;
      document.body.appendChild(textArea);
      textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);

        alert('Results copied to clipboard');
    }

    function exportResults(domain) {

        var resultsText = document.getElementById('results').innerText;
        var dataUri = 'data:text/plain;charset=utf-8,' + encodeURIComponent(resultsText);
        var link = document.createElement('a');

        link.setAttribute('href', dataUri);
        link.setAttribute('download', domain + '_subdomains.txt');
        link.style.display = 'none';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);

        alert('Results exported to a file');
    }
</script>

</div>

</body>
</html>
