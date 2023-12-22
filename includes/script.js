///////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////
//==================================INDEX.PHP======================================================================
//----------------------------------------------------------------------------------------




function displaySystemDate() {
    var currentDate = new Date();
    var dateString = currentDate.toDateString();
    var timeString = currentDate.toLocaleTimeString();
    var fullDateString = dateString;
    document.getElementById("systemDate").innerHTML = fullDateString;
    return fullDateString;
  }
  // Call the function when the page is loaded
  window.onload = function() {
    displaySystemDate();
  };
  
  function generateId() {
    // Prefix
    var prefix = "SMM";
    
    // Current year (2 digits)
    var year = new Date().getFullYear();
    
    // Initialize or get the last generated number from localStorage
    var lastNumber = parseInt(localStorage.getItem("lastNumber")) || 0;
    
    // Increment the last number
    lastNumber++;
    
    // Save the updated last number to localStorage
    localStorage.setItem("lastNumber", lastNumber);
    
    // Ensure the sequential number is padded with zeros to a fixed length
    var sequentialNumber = lastNumber.toString().padStart(5, '0');
    
    // Construct the final ID
    var generatedId = prefix + year + sequentialNumber;
    
    return generatedId;
  }
  function func() {
    var generatedId = generateId();
    var inputElement = document.getElementById("generateId");
    inputElement.value = generatedId;
  };
  // Example usage


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////
//==================================UPDATE.PHP======================================================================
//----------------------------------------------------------------------------------------


    // Open modal function
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('simpleModal').style.display = 'block';
    });

    // Close modal function
    function closeModal() {
        document.getElementById('simpleModal').style.display = 'none';
        window.location.href = 'index.php'; // Redirect to index.php
    }

    // Close modal if clicked outside the content
    window.addEventListener('click', function (e) {
        if (e.target === document.getElementById('simpleModal')) {
            closeModal();
        }
    });