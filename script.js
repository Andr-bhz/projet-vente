const bouton =document .getElementById('theme-toggle');
bouton.addEventListener('click',() => {
    document.documentElement.classList.toggle('dark');
    const estsombre=document.documentElement.classList.contains('dark');
    localStorage.setItem('theme',estsombre ? 'dark' : 'light');
});