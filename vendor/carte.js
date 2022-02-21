/*var map = L.map('maCarte').setView([-1.6777216, 29.2159488], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
*/


var mapi = L.map('maporte').setView([-1.6777216, 29.2159488], 13);
L.marker([-1.6777216, 29.2159488]).addTo(mapi)
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mapi);
$('#form').submit(function(e) {
    var lat = $('#latitude').val();
    var long = $('#longitude').val();
    e.preventDefault();
    L.marker([lat, long]).addTo(map)
});