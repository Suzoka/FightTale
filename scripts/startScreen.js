const select1 = document.querySelector('select#player1');
const select2 = document.querySelector('select#player2');

setTimeout(() => {
    document.querySelectorAll('select').forEach((select, i) => {
        document.querySelectorAll('.selection img')[i].src = `../img/sprites/` + select.value + `.png`;
        select.addEventListener('change', () => {
            if (select1.value == select2.value) {
                select.setCustomValidity("Vous ne pouvez pas choisir deux fois le même personnage");
                select.reportValidity();
            }
            else {
                select1.setCustomValidity("");
                select2.setCustomValidity("");
            }
            document.querySelectorAll('.selection img')[i].src = `../img/sprites/` + select.value + `.png`;
        });
    });
}, 5);