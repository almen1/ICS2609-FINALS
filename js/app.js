const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }else {
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el)=> observer.observe(el));

function scrollToForm() {
    var formElement = document.getElementById('form');
    var targetScrollPosition = formElement.offsetTop - 0.1 * window.innerHeight;
    window.scrollTo({
        top: targetScrollPosition,
        behavior: 'smooth'
    });
}