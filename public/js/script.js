//Search Bar
document.addEventListener('DOMContentLoaded', function() {
    const icon = document.querySelector('.icon');
    const searchContainer = document.getElementById('search-container');
    const searchButton = document.getElementById('search-button');
    const navHiden = document.getElementById('navig');

    

    icon.addEventListener('click', function() {
        if (searchContainer.style.display === 'none' || searchContainer.style.display === '') {

            searchContainer.style.display = 'block';
            icon.style.display = 'none';
            navHiden.style.display = 'none';
            
            
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

document.addEventListener("DOMContentLoaded", function () {
    const scrollToTopButton = document.getElementById("scrollToTopButton");

    scrollToTopButton.addEventListener("click", function () {

        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});

//caroussel avis
document.addEventListener('DOMContentLoaded', function () {
  const carousel = document.querySelector('.carousel');
  const carouselItems = document.querySelectorAll('.carousel-item');
  const chevron1 = document.querySelector('.chevron1');
  const chevron2 = document.querySelector('.chevron2');
  
  let currentIndex = 0;

  function hideAllItems() {
    carouselItems.forEach(item => {
      item.style.display = 'none';
    });
  }

  function showItem(index) {
    carouselItems[index].style.display = 'block';
  }

  function updateCarousel() {
    hideAllItems();
    showItem(currentIndex);
  }

  updateCarousel();

  chevron1.addEventListener('click', function () {
    if (currentIndex > 0) {
      currentIndex--;
      updateCarousel();
    }
  });

  chevron2.addEventListener('click', function () {
    if (currentIndex < carouselItems.length - 1) {
      currentIndex++;
      updateCarousel();
    }
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