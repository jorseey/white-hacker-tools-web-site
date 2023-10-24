function changeContent(page) {
    const contentDiv = document.getElementById("content");

    // Добавляем класс для анимации исчезновения
    contentDiv.classList.add("fade-out");
    // Класс для прокрутки страницы
    contentDiv.classList.add("slide-in");


    setTimeout(function () {
        if (page === 'about-us') {
            contentDiv.innerHTML = `
                <h1 id="about-us">About Us</h1>
                <p>We are Kubgau students!</p>
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
                    <div class="block" onclick="showContent('search-subdomains')"> Search Subdomains </div>
                    <div class="block" onclick="showContent('http-requests')"> HTTP requests</div>
                    <div class="block" onclick="showContent('sql-injection')">SQL Injection</div>
                    <div class="block" onclick="showContent('subdomains-recon')">Subdomains recon</div>
                </div>
            </section>
            `;
        }
     contentDiv.classList.remove("fade-out");
     contentDiv.scrollIntoView({ behavior: 'smooth' });
    }, 300);
}

