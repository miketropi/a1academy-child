var acc = document.getElementsByClassName("accordion_dong");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel_dong = this.nextElementSibling;
            if (panel_dong.style.maxHeight) {
                panel_dong.style.maxHeight = null;
            } else {
                panel_dong.style.maxHeight = panel_dong.scrollHeight + "px";
            }
        });
    }