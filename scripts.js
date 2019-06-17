elems = document.querySelectorAll('[data-action=open-popup]');
elems.forEach(function(item) {
    item.onclick = function(event) {
        var content = item.innerHTML;
        popup_content.innerHTML = '';
        popup_content.innerHTML = content;
        popup.style.display = 'flex'
    }
});

elems = document.querySelectorAll('[data-action=close-popup]');
elems.forEach(function(item) {
    item.onclick = function(event) {
        popup.style.display = 'none'
    }
});