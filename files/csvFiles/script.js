$(document).ready(function () {
    pageScroll();
    $("#contain").mouseover(function () {
        clearTimeout(my_time);
    }).mouseout(function () {
        pageScroll();
    });

    getWidthHeader('table_fixed', 'table_scroll');
});

var my_time;

function pageScroll() {
    var objDiv = document.getElementById("contain");
    var scrollSpeed = 1; // Adjust scroll speed (lower is faster)
    
    var rows = document.getElementById("table_scroll").getElementsByTagName("tr");
    var currentRowIndex = Math.floor(objDiv.scrollTop / rows[1].clientHeight); // Adjusted to rows[1] because the first row might be the header

    for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        for (var j = 0; j < cells.length; j++) {
            cells[j].style.backgroundColor = i === currentRowIndex ? 'lightblue' : '';
        }
    }

    objDiv.scrollTop = objDiv.scrollTop + scrollSpeed;

    if ((objDiv.scrollTop + objDiv.clientHeight) >= objDiv.scrollHeight) {
        // Reached the bottom, reset to the top
        objDiv.scrollTop = 0;
    }
    my_time = setTimeout(pageScroll, 25);
}

function getWidthHeader(id_header, id_scroll) {
    var colCount = 0;
    $('#' + id_scroll + ' tr:nth-child(1) td').each(function () {
        if ($(this).attr('colspan')) {
            colCount += +$(this).attr('colspan');
        } else {
            colCount++;
        }
    });

    for (var i = 1; i <= colCount; i++) {
        var th_width = $('#' + id_scroll + ' > tbody > tr:first-child > td:nth-child(' + i + ')').width();
        $('#' + id_header + ' > thead th:nth-child(' + i + ')').css('width', th_width + 'px');
    }
}
