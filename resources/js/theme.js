Nova.booting((Vue, router) => {
    Vue.component('dark-theme-toggle', require('./components/DarkThemeToggle'));
});

if (localStorage.darkThemeOn === "true") {
    document.querySelector('html').classList.add('dark-theme');
}
