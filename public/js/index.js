'use strict'
window.addEventListener('load', function () {
    var box_container = document.getElementById('box-container');
    box_container.style.height = (window.innerHeight - 48) + "px";
    window.addEventListener('resize', function () {
        function getBom() {
            box_container.style.height = (window.innerHeight - 48) + "px";
        }
        getBom();
    });

});