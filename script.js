// function displayBooks(){
//     let main = document.querySelector(".main-container");
//     let books = [
//         ["images/1.jpg", "Harry Potter and the Philosopher's Stone", 420.00, "The first novel in the Harry Potter series and Rowling's debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry."],
//         ["images/2.jpg", "Harry Potter and the Chamber of Secrets", 580, "The plot follows Harry's second year at Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the school's corridors warn that the \"Chamber of Secrets\" has been opened and that the \"heir of Slytherin\" would kill all pupils who do not come from all-magical families."],
//         ["images/3.jpg", "Harry Potter and the Prisoner of Azkaban", 690, "Harry Potter and the Prisoner of Azkaban is a fantasy novel written by British author J. K. ... Along with friends Ronald Weasley and Hermione Granger, Harry investigates Sirius Black, an escaped prisoner from Azkaban, the wizard prison, believed to be one of Lord Voldemort's old allies."],
//         ["images/4.jpg", "Harry Potter and the Goblet of Fire", 715, "Rowling and the fourth novel in the Harry Potter series. It follows Harry Potter, a wizard in his fourth year at Hogwarts School of Witchcraft and Wizardry, and the mystery surrounding the entry of Harry's name into the Triwizard Tournament, in which he is forced to compete."],
//         ["images/5.jpg", "Harry Potter and the Order of the Phoenix", 830, "Rowling and the fifth novel in the Harry Potter series. It follows Harry Potter's struggles through his fifth year at Hogwarts School of Witchcraft and Wizardry, including the surreptitious return of the antagonist Lord Voldemort, O.W.L. exams, and an obstructive Ministry of Magic."],
//         ["images/6.jpg", "Harry Potter and the Half-blood Prince", 920, "Rowling and the sixth and penultimate novel in the Harry Potter series. Set during Harry Potter's sixth year at Hogwarts, the novel explores the past of the boy wizard's nemesis, Lord Voldemort, and Harry's preparations for the final battle against Voldemort alongside his headmaster and mentor Albus Dumbledore."],
//         ["images/7.jpg", "Harry Potter and the Deathly Hollows", 1080, "The novel chronicles the events directly following Harry Potter and the Half-Blood Prince (2005) and the final confrontation between the wizards Harry Potter and Lord Voldemort. Deathly Hallows shattered sales records upon release, surpassing marks set by previous titles of the Harry Potter series."]
//     ];

//     for(var i = 0; i < 7; i++){
//         main.innerHTML+= "<a href='product.php?src=" + books[i][0] + "&title=" + books[i][1] + "&price=" + books[i][2] + "&synopsis=" + books[i][3] + "'>" +
//             "<div class='books'>" +
//                 "<img src='" + books[i][0] + "' alt=''>" +
//                 "<div class='details'>" +
//                     "<p>" + books[i][1] + "</p>" +
//                     "PHP " + books[i][2] + "<br>" +
//                 "</div>" +
//             "</div>" +
//         "</a>";
//     }
// }

function minusQuantity(){
    let qty = parseInt(document.querySelector(".quantityBox").value);
    if(qty > 1){
        qty--;
    }
    console.log(parseInt(qty));
    document.querySelector(".quantityBox").value = qty;
}
function addQuantity(){
    let qty = parseInt(document.querySelector(".quantityBox").value);
    if(qty < 10){
        qty++;
    }
    document.querySelector(".quantityBox").value = qty;
}
form = document.querySelector("#submitform");
function addToCart(){
    form.action="add.php"
    alert("Item successfully added to cart");
    form.submit();
}
