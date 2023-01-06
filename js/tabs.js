// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function openTable(evt, tableName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabContent" and hide them
    tabcontent = document.getElementsByClassName("tabContent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tabLink" and remove the class "active"
    tablinks = document.getElementsByClassName("tabLink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tableName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  