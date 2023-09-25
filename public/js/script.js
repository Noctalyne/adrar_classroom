document.addEventListener('DOMContentLoaded', function() {
    const icon = document.querySelector('.icon');
    const searchContainer = document.getElementById('search-container');
    const searchButton = document.getElementById('search-button');

    

    icon.addEventListener('click', function() {
        if (searchContainer.style.display === 'none' || searchContainer.style.display === '') {
            searchContainer.style.display = 'block';
            
        } else {
            searchContainer.style.display = 'none';
        }
    });

    searchButton.addEventListener('click', function() {

        
        
        const inputField = searchContainer.querySelector('input[name="q"]');
        const searchValue = inputField.value;

        window.location.href = '{{ path('/') }}?q=' + encodeURIComponent(searchValue);
    });
});