let isContentVisible = false;

function showContent(contentId) {
    const newContent = document.getElementById("newContent");

    // Если контент скрыт, показываем его
    if (!isContentVisible) {
        newContent.style.display = "block";

        // Загружаем и отображаем новое содержимое
        if (contentId === 'search-subdomains') {
            newContent.innerHTML = `
                <h1>Search Subdomains</h1>
                <p>Это новое содержимое для Search Subdomains.</p>
            `;
        } else if (contentId === 'http-requests') {
            newContent.innerHTML = `
                <h1>HTTP Requests</h1>
                <p>Это новое содержимое для HTTP Requests.</p>
            `;
        } else if (contentId === 'sql-injection') {
            newContent.innerHTML = `
                <h1>SQL Injection</h1>
                <p>Это новое содержимое для SQL Injection.</p>
            `;
        }

        // Устанавливаем флаг видимости контента
        isContentVisible = true;
    }
}

function hideContent() {
    const newContent = document.getElementById("newContent");

    // Если контент видим, скрываем его
    if (isContentVisible) {
        newContent.style.display = "none";
        isContentVisible = false;
    }
}
