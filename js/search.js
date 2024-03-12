// 검색어 삭제
document.querySelectorAll('.search-area input').forEach(function(input) {
    var btn = input.parentNode.querySelector('.btnClear');
    btn.style.display = 'none';

    input.addEventListener('input', function() {
        btn.style.display = input.value.trim() !== "" ? 'block' : 'none';
    });

    btn.addEventListener('click', function(e) {
        input.value = "";
        btn.style.display = 'none';
        e.preventDefault();
    });
});

