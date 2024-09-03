// Insert a p tag in read saying its working

var document = window.document;
var p = document.createElement('p');
p.innerHTML = 'Modules are working';
p.style = 'color: blue; font-size: 20px; font-weight: bold;';
document.body.appendChild(p);
