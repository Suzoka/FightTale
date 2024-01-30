document.querySelector('button.item').addEventListener('click', () => {
    document.querySelector('div.historique').style.display = 'none';
    document.querySelector('div.objets').style.display = 'block';
});

document.querySelector('div.historique').scrollTop = document.querySelector('div.historique').scrollHeight;