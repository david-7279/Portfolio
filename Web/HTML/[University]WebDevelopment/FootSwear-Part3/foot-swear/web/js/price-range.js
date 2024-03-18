var priceRange = document.getElementById('price-range');
var priceDisplay = document.getElementById('price-display');
priceRange.oninput = function() {
    priceDisplay.textContent = ' €' + this.value;
}