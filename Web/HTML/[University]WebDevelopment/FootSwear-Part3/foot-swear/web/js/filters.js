// Filters
var $grid = $('#product-list').isotope({});
  $('.filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });

  // Search
  const search1 = () =>{
    const searchbox = document.getElementById("search-item").value.toUpperCase();
    const storeitems = document.getElementById("product-list")
    const product = document.querySelectorAll(".content")
    const pname = storeitems.getElementsByTagName("h5")

    for (var i = 0; i < pname.length; i++){

      let match = product[i].getElementsByTagName('h5')[0];

      if(match){
        let textvalue = match.textContent || match.innerHTML

        if(textvalue.toUpperCase().indexOf(searchbox) > - 1){
          product[i].style.display = "";

        } else{
          product[i].style.display = "none";
        }
      }
    }
  }

  const search2 = () =>{
    const searchbox = document.getElementById("search-item").value.toUpperCase();
    const storeitems = document.getElementById("product-list")
    const product = document.querySelectorAll(".content")
    const pname = storeitems.getElementsByTagName("p")

    for (var i = 0; i < pname.length; i++){

      let match = product[i].getElementsByTagName('p')[0];

      if(match){
        let textvalue = match.textContent || match.innerHTML

        if(textvalue.toUpperCase().indexOf(searchbox) > - 1){
          product[i].style.display = "";

        } else{
          product[i].style.display = "none";
        }
      }
    }
  }