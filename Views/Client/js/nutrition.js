let healthy1 = $(".1.healthy");
for (let i = 0; i < healthy1.length; i++) {
    healthy1[i].innerHTML = "healthy";
}

let healthy0 = $(".0.healthy");
for (let i = 0; i < healthy0.length; i++) {
    healthy0[i].innerHTML = "non healthy";
}

let saison1 = $(".1.saison");
for (let i = 0; i < saison1.length; i++) {
    saison1[i].innerHTML += "<b>Automne</b>";
}

let saison2 = $(".2.saison");
for (let i = 0; i < saison2.length; i++) {
    saison2[i].innerHTML += "<b>Hiver</b>";
}

let saison3 = $(".3.saison");
for (let i = 0; i < saison3.length; i++) {
    saison3[i].innerHTML += "<b>Printemps</b>";
}

let saison4 = $(".4.saison");
for (let i = 0; i < saison4.length; i++) {
    saison4[i].innerHTML += "<b>été</b>";
}