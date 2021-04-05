/*JavaScript*/

window.onload = function() 
{
    // Hide ticket overlay if click outside
    var overlay = document.getElementById("overlay-background");
    document.onclick = function(e) {
        if (e.target.id === "overlay-background") {
            overlay.style.display = "none";
        }
    };

    //update totals for cart overlay
    updateTotals();
};

function updateTotals() 
{
    bigTotal = document.getElementById("big-total");
    subTotal = document.getElementById("sub-total");
    vatTotal = document.getElementById("vat-total");
    total = document.getElementById("full-total");

    bigTotal.innerText = "€" + calculateTotal().toFixed(2);
    total.innerText = "€" + calculateTotal().toFixed(2);
    subTotal.innerText = "€" + (calculateTotal() * 0.79).toFixed(2);
    vatTotal.innerText = "€" + (calculateTotal() * 0.21).toFixed(2);
}

function calculateTotal() 
{
    var quantity = document.getElementById("quantity").value;
    var price = document.getElementById("ticket-price-overlay").innerText;
    return price * quantity;
}

function updateCartTotal() 
{
    var cartRows = document.getElementsByClassName("cart-row");
    var total = 0;

    for (var i = 0; i < cartRows.length; i++) 
    {
        var row = cartRows[i];
        var price = parseFloat(row.getElementsByClassName("cart-ticket-price")[0].innerText.replace("€", ""));
        var quantity = row.getElementsByClassName("cart-quantity")[0].value;

        var subTotal = price * quantity;
        row.getElementsByClassName("cart-ticket-total")[0].innerText = "€" + subTotal;

        total+= subTotal;
    }

    document.getElementById("cart-total").innerText = "€" + total;
}