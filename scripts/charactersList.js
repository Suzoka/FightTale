// document.addEventListener('DOMContentLoaded', function() {
//     var table = document.querySelector('table');
//     var thead = table.querySelector('thead');
//     var cloneThead = thead.cloneNode(true);
//     var tbody = table.querySelector('tbody');

//     tbody.insertBefore(cloneThead, tbody.firstChild);

//     table.addEventListener('scroll', function() {
//         if (table.scrollTop > 0) {
//             cloneThead.style.position = 'sticky';
//             cloneThead.style.top = '0';
//         } else {
//             cloneThead.style.position = 'static';
//         }
//     });
// });