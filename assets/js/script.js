const sendButton = document.getElementById('sendButton');
const wrapper = document.getElementById('wrapper');
const popup = document.getElementById('popup');
const button = document.querySelector('.navbar-toggler');
const navbarSupportedContent = document.getElementById('navbarSupportedContent');
button.addEventListener('click', () => {
    navbarSupportedContent.classList.toggle('collapsed');
});
sendButton.addEventListener('click', event => {
    event.preventDefault();
    wrapper.style.display = 'block';
    popup.style.display = 'block';
    setTimeout(() => {
        wrapper.style.display = 'none';
        popup.style.display = 'none';
    }, 1000);
});