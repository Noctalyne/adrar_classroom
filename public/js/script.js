//Search Bar
document.addEventListener('DOMContentLoaded', function() {
    const icon = document.querySelector('.icon');
    const searchContainer = document.getElementById('search-container');
    const searchButton = document.getElementById('search-button');

    

    icon.addEventListener('click', function() {
        if (searchContainer.style.display === 'none' || searchContainer.style.display === '') {
            searchContainer.style.display = 'block';

            icon.style.display = 'none';
            
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

//Footer

document.addEventListener("DOMContentLoaded", function () {
    const scrollToTopButton = document.getElementById("scrollToTopButton");

    scrollToTopButton.addEventListener("click", function () {

        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});
