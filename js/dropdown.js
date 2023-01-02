function dropdownSD() {
    document.getElementById("content-sd").classList.toggle("showSD");
}
    
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn-sd')) {
        var dropdowns1 = document.getElementsByClassName(".dropbtn-sd");
        var i;
        for (i = 0; i < dropdowns1.length; i++) {
            var openDropdown = dropdowns1[i];
            if (openDropdown.classList.contains('showSD')) {
                openDropdown.classList.remove('showSD');
            }
        }
    }
}


function dropdownSMP() {
    document.getElementById("content-smp").classList.toggle("showSMP");
}

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn-smp')) {
        var dropdowns2 = document.getElementsByClassName(".dropbtn-smp");
        var i;
        for (i = 0; i < dropdowns2.length; i++) {
            var openDropdown = dropdowns2[i];
            if (openDropdown.classList.contains('showSMP')) {
                openDropdown.classList.remove('showSMP');
            }
        }
    }
}


function dropdownSMA() {
    document.getElementById("content-sma").classList.toggle("showSMA");
}

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn-sma')) {
        var dropdowns3 = document.getElementsByClassName(".dropbtn-sma");
        var i;
        for (i = 0; i < dropdowns3.length; i++) {
            var openDropdown = dropdowns3[i];
            if (openDropdown.classList.contains('showSMA')) {
                openDropdown.classList.remove('showSMA');
            }
        }
    }
}