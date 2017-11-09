document.addEventListener("DOMContentLoaded", function(event) { // Document Ready
    var target = document.querySelectorAll(".clearform"); // Select inputs
        for (i = 0; i < target.length; i++) { // for all
            target[i].form.reset(); // clear input content
        }
}); // end document.ready