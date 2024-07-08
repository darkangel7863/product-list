const type = document.getElementById('productType');
const typeDVD = document.getElementById('dvdFeature');
const typeFurniture = document.getElementById('furnitureFeature');
const typeBook = document.getElementById('bookFeature');

document.getElementById('productType').addEventListener('change', function () {
  type.value === 'dvd'
    ? (typeDVD.style.display = 'block')
    : (typeDVD.style.display = 'none');
  type.value === 'book'
    ? (typeBook.style.display = 'block')
    : (typeBook.style.display = 'none');
  type.value === 'furniture'
    ? (typeFurniture.style.display = 'block')
    : (typeFurniture.style.display = 'none');
});
