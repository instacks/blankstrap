document.addEventListener('DOMContentLoaded', function () {
    blankstrap.initializeHeight('#%[if %("%id=uid%" != "")%]%%id=uid%%[else]%%id%%[endif]%', '%id=fixed%');
});