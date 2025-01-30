// Smooth scrolling for navigation links
document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({ behavior: 'smooth' });
    });
});
// Toggle between light and dark mode
const toggleButton = document.getElementById('theme-toggle');
toggleButton.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
});
// Display a dynamic greeting
const greetingElement = document.getElementById('greeting');
const hour = new Date().getHours();
let greeting;

if (hour < 12) {
    greeting = 'Good morning!';
} else if (hour < 18) {
    greeting = 'Good afternoon!';
} else {
    greeting = 'Good evening!';
}

greetingElement.textContent = greeting;
