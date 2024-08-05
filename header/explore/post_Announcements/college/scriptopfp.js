function openTab(evt, tabName) {
    var i, content, tablinks;
    content = document.getElementsByClassName("content");
    for (i = 0; i < content.length; i++) {
        content[i].style.display = "none";
        content[i].style.opacity = "0"; // Set opacity to 0 when hiding
    }
    tablinks = document.getElementsByClassName("tab-link");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    document.getElementById(tabName).style.opacity = "1"; // Set opacity to 1 when displaying
    evt.currentTarget.className += " active";
}

function mobileTabChange(event) {
    var i, content;
    content = document.getElementsByClassName("content");
    for (i = 0; i < content.length; i++) {
        content[i].style.display = "none";
        content[i].style.opacity = "0"; // Set opacity to 0 when hiding
    }
    document.getElementById(event.target.value).style.display = "block";
    document.getElementById(event.target.value).style.opacity = "1"; // Set opacity to 1 when displaying
}

// Default tab to open
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("events").style.display = "block";
    document.getElementById("events").style.opacity = "1"; // Set opacity to 1 for default tab
});
