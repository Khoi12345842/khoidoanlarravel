document.addEventListener('DOMContentLoaded', function () {
    // Toggle search input
    const searchToggle = document.getElementById('search-toggle');
    const searchInput = document.querySelector('.search-input');
    searchToggle.addEventListener('click', function (e) {
        e.preventDefault();
        searchInput.style.display = searchInput.style.display === 'none' ? 'block' : 'none';
    });

    // Toggle user dropdown
    const userToggle = document.getElementById('user-toggle');
    const userDropdown = document.querySelector('.user-dropdown');
    userToggle.addEventListener('click', function (e) {
        e.preventDefault();
        userDropdown.style.display = userDropdown.style.display === 'none' ? 'block' : 'none';
    });

    // Đóng dropdown khi nhấp ra ngoài
    document.addEventListener('click', function (e) {
        if (!userToggle.contains(e.target)) {
            userDropdown.style.display = 'none';
        }
        if (!searchToggle.contains(e.target) && !searchInput.contains(e.target)) {
            searchInput.style.display = 'none';
        }
    });
});