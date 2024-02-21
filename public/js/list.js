/**
 * 検索結果を表示させる
 */
function searchValue() {
    const input = document.querySelector('.search-input');
    const btn = document.querySelector('.search-btn');
    const items = document.querySelectorAll('.test-item');

    btn.addEventListener('click', function () {
        items.forEach(item => {
            if (!item.children[0].textContent.includes(input.value)) {
                if (!item.children[1].textContent.includes(input.value)) {
                    if (!item.children[2].textContent.includes(input.value)) {
                        if (!item.children[3].textContent.includes(input.value)) {
                            item.remove();
                        }
                    }
                }
            }
        });
    });
}
searchValue();