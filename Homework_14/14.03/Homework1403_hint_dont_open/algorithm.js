/*
In javascript

1) Create three objects  - john, rob, jane
with data from video

var john = {
    firstName: 'John',
    .... other data
};
var rob = {
    ....
}
var jane = {

}
...

2) add this objects to array "users"
3) get all inputs with  document.getElementsByTagName("input") - this will give you array with all inputs without select
4) get id of select and id of button with two document.getElementById()
5) add event listener to button
6) create a function loadUserData();

=====================================
In function loadUserData()
=====================================

1) get the select value with select.value
var selectedUser = select.value

2) if select value is empty (false) - loop over all inputs and set input values to empty string ""
....code
inputs[i].value = "";
....code
3) loop over users array
4) in loop check if selectedUser name is equal to USER OBJECT firstName value
5) if condition in 4) is true fill inputs array values with object properties
inputs[0].value = users[i].firstName;
inputs[1].value = users[i].lastName;

*/