// Insert a p tag in read saying its working
import '../SCSS/test.scss';

var h1 = document.getElementById('h1');
var text = h1.textContent;
// Replace lowercase with uppercase
h1.textContent = text.replace('just a static lowercase', 'uppercase');

var p = document.createElement('p');
p.innerHTML = 'Vite is working';
p.style = 'color: red; font-size: 20px; font-weight: bold;';
document.body.appendChild(p);

// if the class .someclass is detected laod the js module someclass.js
if (document.querySelector('.someclass')) {
    import('./someclass.js').then(module => {
        console.log('someclass.js loaded');
    });
}
