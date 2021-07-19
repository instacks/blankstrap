document.addEventListener('DOMContentLoaded', function () {
    var dropdowns = document.querySelector('#%[if %("%id=uid%" != "")%]%%id=uid%%[else]%%id%%[endif]% .navbar-nav').querySelectorAll('.dropdown');
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
    //%[if %( "%id=fixed%" == "fixed" )% ]%
    document.querySelector('body').style['padding-top'] = getComputedStyle(document.querySelector('#%[if %("%id=uid%" != "")%]%%id=uid%%[else]%%id%%[endif]%'))['height'];
    //%[endif]%
    //%[if %( "%id=fixed%" == "fixed-headroom" )% ]%
    document.querySelector('body').style['padding-top'] = getComputedStyle(document.querySelector('#%[if %("%id=uid%" != "")%]%%id=uid%%[else]%%id%%[endif]%'))['height'];
    new Headroom(document.querySelector("#%[if %("%id=uid%" != "")%]%%id=uid%%[else]%%id%%[endif]%")).init();
    //%[endif]%
});