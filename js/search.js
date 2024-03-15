function prints() {
    const printName = document.querySelector('.printName').value;
    const quotedPrintName = `"${printName}"`;
    document.querySelector(".print-result").textContent = quotedPrintName;
}

document.querySelectorAll('.search-area input').forEach(function(input) {
    var btn = input.parentNode.querySelector('.btnClear');
    btn.style.display = 'none';

    input.addEventListener('input', function() {
        btn.style.display = input.value.trim() !== "" ? 'block' : 'none';
    });

    btn.addEventListener('click', function(e) {
        input.value = "";
        btn.style.display = 'none';
        document.querySelector(".print-result").textContent = ""; // 입력한 값 비우기
        e.preventDefault();
    });
});
