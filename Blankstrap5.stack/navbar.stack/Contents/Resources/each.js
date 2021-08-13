document.addEventListener('DOMContentLoaded', function () {
    blankstrap.initializeNavigation('#%[if %("%id=uid%" != "")%]%%id=uid%%[else]%%id%%[endif]%', '%id=fixed%');
});