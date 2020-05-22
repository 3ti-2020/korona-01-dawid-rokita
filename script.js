console.log("jeśli klikne na zielonego diva to zamini się tekst z Strona stworzona z myślą o tych, którzy są ciekawi na Tak naprawdę to wiem, że kostki są nudne :)")
console.log("jeśli klikne na przyciski z menu to się obracają");

const parag = document.querySelector(".parag");
const item1 = document.querySelector(".item1");
const li1 = document.querySelector(".li1");
const li2 = document.querySelector(".li2");
const li3 = document.querySelector(".li3");
const btn = document.querySelector(".dodaj");
const inslist = document.querySelector(".inslist");


item1.addEventListener('click', function(){
    parag.innerHTML = "<p>Tak naprawdę to wiem, że kostki są nudne :)</p>";
})
li1.addEventListener('mouseenter', function(){
    li1.className = "lirot";
})
li1.addEventListener('mouseleave', function(){
    li1.className = "li1";
})
li2.addEventListener('mouseenter', function(){
    li2.className = "lirot";
})
li2.addEventListener('mouseleave', function(){
    li2.className = "li2";
})
li3.addEventListener('mouseenter', function(){
    li3.className = "lirot";
})
li3.addEventListener('mouseleave', function(){
    li3.className = "li3";
})

btn.addEventListener('click', function(){
    if(inslist.className === "inslist"){
        inslist.className = "inslist2";
    } else{
        inslist.className = "inslist";
    }
})




