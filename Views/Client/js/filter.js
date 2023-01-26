$("#filter-btn").click(function () {
    if ($(".filter-option").hasClass("hidden")) {
        $(".filter-option").removeClass("hidden");
    } else {
        $(".filter-option").addClass("hidden");
    }
})

function filter(classname, value) {
    a = $("." + classname);
    for (let i = 0; i < a.length; i++) {
        id = $(a[i]).attr("class").split(/\s+/)[2];
        console.log(value,a[i].innerHTML);
        if (a[i].innerHTML.toUpperCase().indexOf(value.toUpperCase()) == -1) {
            console.log("id :" + value.toUpperCase());
            $("#" + id).addClass("hidden");
        } else if ($("#" + id).hasClass("hidden")) {
            $("#" + id).removeClass("hidden");
        }
    }
}

function search(classname, value) {
    let pattern = new RegExp( ''+value+'', 'i');
    a = $("." + classname);
    for (let i = 0; i < a.length; i++) {
        id = $(a[i]).attr("class").split(/\s+/)[1];
        if ( a[i].innerHTML.match(pattern) == null ) {
            $("#" + id).addClass("hidden");
        } else if ($("#" + id).hasClass("hidden")) {
            $("#" + id).removeClass("hidden");
        }
    }
}



function filterInf(classname, value) {
    a = $("." + classname);
    for (let i = 0; i < a.length; i++) {
        id = $(a[i]).attr("class").split(/\s+/)[2];
        if (parseInt(a[i].innerHTML) > parseInt(value)) {
            console.log("id :" + value);
            $("#" + id).addClass("hidden");
        } else if ($("#" + id).hasClass("hidden")) {
            $("#" + id).removeClass("hidden");
        }
    }
}

function filterSup(classname, value) {
    a = $("." + classname);
    for (let i = 0; i < a.length; i++) {
        id = $(a[i]).attr("class").split(/\s+/)[2];
        if (parseInt(a[i].innerHTML) < parseInt(value)) {
            console.log("id :" + value);
            $("#" + id).addClass("hidden");
        } else if ($("#" + id).hasClass("hidden")) {
            $("#" + id).removeClass("hidden");
        }
    }
}
function filterHours(classname, hours,minutes) {
    a = $("." + classname);
    for (let i = 0; i < a.length; i++) {
        id = $(a[i]).attr("class").split(/\s+/)[2];
        if ( parseInt(getHours(a[i].innerHTML)) > parseInt(hours)) {
            $("#" + id).addClass("hidden");
        } else if ( parseInt(getMintues(a[i].innerHTML)) > parseInt(minutes)  ) {
            $("#" + id).addClass("hidden");
        } else if ($("#" + id).hasClass("hidden")) {
            $("#" + id).removeClass("hidden");
        }
    }
}

function getMintues(string) {
    return string.substring(3,5);
}
function getHours(string) {
    return string.substring(0,2);
}




$("#tmpprep1").keyup(function () {
    let value = $(this).val();
    console.log(value)
    filterHours("tempsprep",value,$("#tmpprep2").val());
})
$("#tmpprep2").keyup(function () {
    let value = $(this).val();
    filterHours("tempsprep",$("#tmpprep1").val(),value);
})


$("#tmpcuiss1").keyup(function () {
    let value = $(this).val();
    filterHours("tempscuiss",value,$("#tmpcuiss2").val());
})
$("#tmpcuiss2").keyup(function () {
    let value = $(this).val();
    filterHours("tempscuiss",$("#tmpcuiss1").val(),value);
})



$("#tmptot1").keyup(function () {
    let value = $(this).val();
    filterHours("tempstotal",value,$("#tmptot2").val());
})
$("#tmptot2").keyup(function () {
    let value = $(this).val();
    filterHours("tempstotal",$("#tmptot1").val(),value);
})





$("#minCal").keyup(function () {
    let value = $(this).val();
    filterSup("calories", value);
})


$("#maxCal").keyup(function () {
    let value = $(this).val();
    filterInf("calories", value);
})

$('#saisons').change(function () {
    let value = $(this).val();
    filter("season", value);
})



$("#fete").change(function() {
    let value = $(this).val();
    console.log(value);
    filter("fetes", value);
})

$('#gsearch').keyup(function () {
    let value = $(this).val();
    search("nomrecette" , value);
})