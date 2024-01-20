setTimeout(() => {
    document.querySelectorAll('select').forEach((select, i) => {
        console.log("coucou");
        document.querySelectorAll('.selection img')[i].src = `../img/sprites/` + select.value + `.png`;
        select.addEventListener('change', () => {
            document.querySelectorAll('.selection img')[i].src = `../img/sprites/` + select.value + `.png`;
        });
    });
}, 5);