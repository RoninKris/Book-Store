function displayBooks(){
    let main = document.querySelector(".main-container");
    let books = [
        ["images/1.jpg", "Harry Potter and the Philosopher's Stone", 420],
        ["images/2.jpg", "Harry Potter and the Chamber of Secrets", 580],
        ["images/3.jpg", "Harry Potter and the Prisoner of Azkaban", 690],
        ["images/4.jpg", "Harry Potter and the Goblet of Fire", 715],
        ["images/5.jpg", "Harry Potter and the Order of the Phoenix", 830],
        ["images/6.jpg", "Harry Potter and the Half-blood Prince", 920],
        ["images/7.jpg", "Harry Potter and the Deathly Hollows", 1080],
    ];

    for(var i = 0; i < 7; i++){
        main.innerHTML+= "<a href='product.php?src=" + books[i][0] + "&title=" + books[i][1] + "&price=" + books[i][2]
    "<div class='books'>" +
            "<img src='" + books[i][0] + "' alt=''>" +
            "<div class='details'>" +
                "<p>" + books[i][1] + "</p>" +
                "PHP " + books[i][2] + "<br>" +
            "</div>" +
        "</div>" +
    "</a>";
    }
}
/*
TODO:
* Fix minusQuantity and addQuantity not working
  * Output is NaN
*/
function minusQuantity(){
    let qty = parseInt(document.querySelector(".quantity").value, 10);
    if(qty > 0){
        qty--;
    }
    console.log(qty);
}
function addQuantity(){
    let qty = parseInt(document.querySelector(".quantity").value, 10);
    if(qty < 10){
        qty++;
    }
}