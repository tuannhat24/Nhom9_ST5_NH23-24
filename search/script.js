const data = [
    
];

const searchInput = document.getElementById('searchInput');
const searchResults = document.getElementById('searchResults');

function displayResults(results) {
    searchResults.innerHTML = '';
    results.forEach(result => {
        const li = document.createElement('li');
        li.textContent = result;
        searchResults.appendChild(li);
    });
}

function search(keyword) {
    const results = data.filter(item => item.toLowerCase().includes(keyword.toLowerCase()));
    displayResults(results);
}

searchInput.addEventListener('input', () => {
    const keyword = searchInput.value.trim();
    search(keyword);
});
