
function Quantities(){

var Shirts = document.getElementById("Shirts").value;
var Pants = document.getElementById("Pants").value;
var Trousers = document.getElementById("Trousers").value;
var Ties = document.getElementById("Ties").value;
var Tshirts = document.getElementById("Tshirts").value;
var Quantity = +Shirts + +Pants + +Trousers + +Ties + +Tshirts;
var Quantity2= +Shirts + +Pants + +Trousers + +Ties + +Tshirts;
document.getElementById("Quantity").value=Quantity;
document.getElementById("DisplayQuantity").innerHTML=Quantity2;

if (Quantity == 0){
	 $("#submit").attr('disabled',true);
}
else
{
   $("#submit").attr('disabled',false);
}
}


setInterval(Quantities, 1000);


function CalculatePrice(){
	
	var ShirtPrice = (document.getElementById("Shirts").value) * (30);
	var PantPrice = (document.getElementById("Pants").value) * (20);
	var TrouserPrice = (document.getElementById("Trousers").value) * (25);
	var TiePrice = (document.getElementById("Ties").value) * (15);
	var TShirtPrice = (document.getElementById("Tshirts").value) * (35);
	var TotalPrice = +ShirtPrice + +PantPrice + +TrouserPrice + +TiePrice + +TShirtPrice;
	document.getElementById("PriceDisplay").innerHTML=TotalPrice;
	document.getElementById("TPBD").value=TotalPrice;
	
	if (TotalPrice >100){
		document.getElementById("AfterDiscountDisplay").innerHTML= 0.9 * TotalPrice;
		document.getElementById("TPAD").value=0.9 * TotalPrice;
}
else
{
	document.getElementById("AfterDiscountDisplay").innerHTML= TotalPrice;
	document.getElementById("TPAD").value=TotalPrice;
}
}
setInterval(CalculatePrice, 1000);

