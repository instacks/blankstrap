
var stacks = {};
stacks.com_instacks_blankstrap5_carousel = {};
stacks.com_instacks_blankstrap5_carousel = (function(stack) {document.addEventListener('DOMContentLoaded',function(){
    document.querySelectorAll('.carousel-inner').forEach(function(element){
        element.children[0].className = element.children[0].className + ' active';
    });
    document.querySelectorAll('.indicators').forEach(function(element){
        var parentElement = document.querySelectorAll('.indicators')[0].parentElement;
        var children = parentElement.querySelector('.carousel-inner').childElementCount;
        for (var i = 0; i < children; i++) {
            var button = document.createElement('button');
            button.setAttribute('type', 'button');
            button.setAttribute('data-bs-target', '#' + parentElement.id);
            button.setAttribute('data-bs-slide-to', i);
            button.setAttribute('aria-label', 'Slide ' + i);
            if (i === 0) {
                button.className = 'active';
                button.setAttribute('aria-current', 'true');
            }
            element.appendChild(button);
        }
        element.className = 'carousel-indicators';
    });
});
return stack;})(stacks.com_instacks_blankstrap5_carousel);
stacks.stacks_in_7_6 = {};
stacks.stacks_in_7_6 = (function(stack) {document.addEventListener('DOMContentLoaded', function () {
    var dropdowns = document.querySelector('#testnav .navbar-nav').querySelectorAll('.dropdown');
    dropdowns.forEach(function(dropdownItem, i){
        var a = dropdownItem.querySelector('a')
        a.classList.add('dropdown-toggle');
        a.setAttribute('href', '#');
        a.setAttribute('data-bs-toggle', 'dropdown');
        a.setAttribute('aria-haspopup', 'true');
        a.setAttribute('aria-expanded', 'false');
    });
    dropdowns.forEach(function(dropdownItem, i){
        var ul = dropdownItem.querySelector('ul');
        ul.classList.add('dropdown-menu');
        ul.classList.remove('navbar-nav');
        ul.setAttribute('aria-labelledby', 'navbarDropdownMenuLink');
        var uls = dropdownItem.querySelectorAll('ul');
        uls.forEach(function(ulItem, i){
            var li = ulItem.querySelector('li');
            li.classList.remove('nav-item');
            var lis = ulItem.querySelectorAll('li');
            lis.forEach(function(liItem, i){
                var a = liItem.querySelector('a');
                a.classList.add('dropdown-item');
                a.classList.remove('nav-link');
            });
        });
    });
    //
    //
    document.querySelector('body').style['padding-top'] = getComputedStyle(document.querySelector('#testnav'))['height'];
    new Headroom(document.querySelector("#testnav")).init();
    //
});
return stack;})(stacks.stacks_in_7_6);