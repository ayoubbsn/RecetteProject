let fetes = $(".fetes");
for (let i = 0 ; i < fetes.length ; i++ ){
    if (fetes[i].innerHTML == ''){
        let id = $(fetes[i]).attr("class").split(/\s+/)[2];
        $("#" + id).addClass("hiddden");
    }
}
