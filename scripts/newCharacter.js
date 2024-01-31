document.querySelector('input[type=file]').onchange = function () {
    var src = URL.createObjectURL(this.files[0]);
    document.querySelector('img.dynamique').src = src;
    document.querySelector('div.picture-form label').classList.add('rempli');
}