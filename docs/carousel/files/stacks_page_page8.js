
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
    blankstrap.initializeNavigation('#testnav', 'fixed-headroom');
});
return stack;})(stacks.stacks_in_7_6);