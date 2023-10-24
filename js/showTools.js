let isContentVisible = false;
let currentContentId = null;

function showContent(contentId) {
    const newContent = document.getElementById("newContent");

    // Если контент уже видим и это тот же контент, скрываем его
    if (isContentVisible && currentContentId === contentId) {
        hideContent();
    } else {
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

        // Показываем новый контент
        newContent.style.display = "block";
        isContentVisible = true;
        currentContentId = contentId;
    }
}

function hideContent() {
    const newContent = document.getElementById("newContent");

    // Если контент видим, скрываем его
    if (isContentVisible) {
        newContent.style.display = "none";
        isContentVisible = false;
        currentContentId = null;
    }
    contentDiv.classList.remove("fade-out");
}
