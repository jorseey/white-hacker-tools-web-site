function changeContent(page) {
    const contentDiv = document.getElementById("content");

    // Добавляем класс для анимации исчезновения
    contentDiv.classList.add("fade-out");
    // Класс для прокрутки страницы
    contentDiv.classList.add("slide-in");


    setTimeout(function () {
        if (page === 'about-us') {
            contentDiv.innerHTML = `
            <section id="about-us" class="about-section">
                <div class="about-content">
                    <h2>About Us</h2>
                    <p></p><p></p><p></p><p></p>
                    <p>Добро пожаловать на наш сайт White Hacker Tools. </p>
                    <p></p> <p>Мы — группа студентов-энтузиастов, стремящихся предоставить вам инструменты и ресурсы для этического взлома и кибербезопасности.</p>
                    <p></p>
                    <p>Наша цель — сделать цифровой мир более безопасным, предоставив отдельным лицам и организациям знания и инструменты, необходимые для защиты их онлайн-активов.</p>
                </div>
            </section>
            `;
        } else if (page === 'contact') {
            contentDiv.innerHTML = `
                <h1 id="contact">Our contacts:</h1>
                <p>email:</p>
                <p>github:</p>
            `;
        } else if (page === 'useful-materials') {
            contentDiv.innerHTML = `
                <h1 id="useful-materials">Useful materials</h1>
                <p>Guide:</p>
            `;
        } else if (page === 'history') {
            contentDiv.innerHTML = `
                <h1 id="history">History</h1>
                <p>Requests:</p>
             `;
        } else if (page === 'tools-list') {
            contentDiv.innerHTML = `
            <section id="tools-set" class="content-tools">
                <div class="container">
                    <div class="block" style="cursor:pointer;" onclick="showContent('search-subdomains')"> Search Subdomains </div>
                    <div class="block" style="cursor:pointer;" onclick="showContent('http-requests')"> HTTP requests</div>
                    <div class="block" style="cursor:pointer;" onclick="showContent('sql-injection')">SQL Injection</div>
                    <div class="block" style="cursor:pointer;" onclick="showContent('subdomains-recon')">Subdomains recon</div>
                </div>
            </section>
            `;
        } else if (page === 'main-page') {
            contentDiv.innerHTML = ``;
        }
     contentDiv.classList.remove("fade-out");
     contentDiv.scrollIntoView({ behavior: 'smooth' });
    }, 300);
}

