document.querySelector('button.item').addEventListener('click', () => {
    document.querySelector('div.historique').style.display = 'none';
    document.querySelector('div.objets').style.display = 'block';
});

document.querySelector('div.historique').scrollTop = document.querySelector('div.historique').scrollHeight;

document.querySelector('button.rules').addEventListener('click', () => {
    document.querySelector('div.regles').style.display = 'flex';
});

document.querySelector('button.close').addEventListener('click', () => {
    document.querySelector('div.regles').style.display = 'none';
});

document.querySelector('div.regles').addEventListener('click', (e) => {
    if (e.target == document.querySelector('div.regles')) {
        document.querySelector('div.regles').style.display = 'none';
    }
});