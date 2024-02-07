const select1 = document.querySelector('select#player1');
const select2 = document.querySelector('select#player2');

setTimeout(() => {
    document.querySelectorAll('select').forEach((select, i) => {
        document.querySelectorAll('.selection img')[i].src = `../img/sprites/` + select.value + `.png`;
        select.addEventListener('change', (e) => {
            select.setCustomValidity("");
            if (select1.value == select2.value) {
                console.log(e);
                select.setCustomValidity("Vous ne pouvez pas choisir deux fois le même personnage");
                select.reportValidity();
            }
                document.querySelectorAll('.selection img')[i].src = `../img/sprites/` + select.value + `.png`;
        });
    });
}, 5);