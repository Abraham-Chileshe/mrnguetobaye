document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('theme-toggle');
    const body = document.body;

    if (!toggleButton) return;

    // Check for saved user preference
    const currentTheme = localStorage.getItem('theme');
    if (currentTheme === 'dark') {
        body.classList.add('dark-mode');
        toggleButton.textContent = '☀️'; // Change icon to sun
    } else {
        toggleButton.textContent = '🌙'; // Default moon
    }

    toggleButton.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        
        let theme = 'light';
        if (body.classList.contains('dark-mode')) {
            theme = 'dark';
            toggleButton.textContent = '☀️';
        } else {
            toggleButton.textContent = '🌙';
        }
        
        localStorage.setItem('theme', theme);
    });
});
