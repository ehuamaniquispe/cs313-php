let itemList = [];

function addItem() {
    let item = document.getElementById("items").value;
    itemList.push(item);
    console.log(itemList);
    alert("item has been added")
}