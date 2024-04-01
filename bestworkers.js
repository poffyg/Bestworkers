

function toggleDropdown(myDropdownAbw) {
  var dropdownContent = document.getElementById(myDropdownAbw);
  var dropdowns = document.getElementsByClassName("dropdown-content-abw");
  for (var i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.id !== dropdownId) {
      openDropdown.classList.remove('show');
    }
  }
  dropdownContent.classList.toggle("show");
}
  
  
  
  