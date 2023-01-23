// 다크모드
const colorModeOverride = window.localStorage.getItem('color-mode');
const hasColorModeOverride = typeof colorModeOverride === 'string';

if (hasColorModeOverride) {
    document.documentElement.setAttribute('data-force-color-mode', colorModeOverride);
}

if ((colorModeOverride == 'dark') || (!hasColorModeOverride && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.querySelector('#toggle_darkmode').checked = true;
}

const setColorMode = (mode) => {
    if (mode) {
        document.documentElement.setAttribute('data-force-color-mode', mode);
        window.localStorage.setItem('color-mode', mode);
        document.querySelector('#toggle_darkmode').checked = (mode === 'dark');
    } else {
        document.documentElement.removeAttribute('data-force-color-mode');
        window.localStorage.removeItem('color-mode');
        document.querySelector('#toggle_darkmode').checked = window.matchMedia('(prefers-color-scheme: dark)').matches;
    }
}

document.querySelector('#toggle_darkmode').addEventListener('click', (e) => {
    setColorMode(e.target.checked ? 'dark' : 'light');
});

const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
mediaQuery.addListener(() => {

    if (document.documentElement.getAttribute('data-force-color-mode')) {
        return;
    }

    document.querySelector('#toggle_darkmode').checked = mediaQuery.matches;
});
