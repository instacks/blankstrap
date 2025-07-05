document.addEventListener('DOMContentLoaded', function () {
    blankstrap.fixNavigation('#%[if %("%id=uid%" != "")%]%%id=uid%%[else]%%id%%[endif]%', '%id=fixed%');
});