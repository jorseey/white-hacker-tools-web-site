<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">


    <title>WH Tools</title>
</head>
<body>
    
    <header>
        <div class="logo"><a style="cursor:pointer" id="main-page-button" onclick="changeContent('main-page')"><img src="./img/logo.svg" alt="pic-logo"></a></div>
        <div class="nav">
            
            <ul class="navbar-menu">
                <li><a style="cursor:pointer;" id="about-us-button" onclick="changeContent('about-us')">About Us</a></li>
                <li><a style="cursor:pointer;" id="contact-button" onclick="changeContent('contact')">Contact</a></li>
                <li><a style="cursor:pointer;" id="useful-materials-button" onclick="changeContent('useful-materials')">Useful Materials</a></li>
                <li><a style="cursor:pointer;" id="history-button" onclick="changeContent('history')">History</a></li>
                <li><a style="cursor:pointer;" id="tools-list-button" class="tools_list" onclick="changeContent('tools-list')"> Tools </a> </li>
            </ul>


        </div>
        
    </header>
    
    <main class="main-content" id = "fullpage">
        <section id="content-main-page" class="content-main-page">
            <h1>White Hacker Tools</h1>
            <h2>Fast. Simple. Secure.</h2>
        </section>

        <div id ="content" class="content-transition">

        </div>

        <div id="newContent" class="content-transition">
            <!-- Здесь будет отображаться новое содержимое -->
        </div>

        <button id="hideButton" onclick="hideContent()" style="display: none;">Скрыть контент</button>


        
    </main>

    <footer>
    </footer>

    <script src="./js/changeContent.js"></script>
    <script src="./js/showTools.js"></script>
    <script src="./js/activeButton.js"></script>
</body>
</html>