document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.carousel-inner').forEach(function(element){
        element.children[0].className = element.children[0].className + ' active'
    });
});
