

// Homework warm up

/*
********************************************************************
Warm up 1
*/
// Create a loop that will count in console from 1 to 100


/*
********************************************************************
Warm up 2
*/
// Create array from words
// [0] => This 
// [1] => is
// [2] => an
// [3] => amazing
// [4] => sentence
// use for loop to print this array as single sentence to console, the sentence should end with dot(.)
// Result should be "This is an amaizing sentence."


/*
********************************************************************
Warm up 3


*/
// Create a function which will return a sum of given array (elements are only primitives - no nested arrays or objects in given array allowed)
// Function should loop through array
// Shall skip if array item is string, null or undefined ( use "continue" statement)
// Shall return a sum of only numbers in array

// var myArray = [null, 0, 1, 2, "five", "six", 3, 4, undefined, 5, 7]
// Result should be 22

// ***************************
// SCROLL DOWN FOR SOLUTIONS 
// ***************************

// !!! --- SCROLL DOWN FOR SOLUTIONS to check yourself --- !!!






























/*
*******************************************
Solutions
*******************************************
*/

// Warm up 1 Solution:

for (var i = 1; i <= 100; i++) {
    console.log(i);
}

// Warm up 2 Solution:

var sentence = ""; // we create empty sentence

var wordsArray = ['This', 'is', 'an', 'amazing', 'sentence'];

for (var i = 0; i < wordsArray.length; i++) {

    if (i === wordsArray.length - 1) { // we check if item is last in array, remember this check!
        sentence += wordsArray[i] + '.'; // we want dot at the end of sentence
    } else {
        sentence += wordsArray[i] + " "; // if word is not last in array we add space to separate words
    }
}
// print sentence to console
console.log(sentence);


// Warm up 3 Solution:

var myArray = [null, 0, 1, 2, "five", "six", 3, 4, undefined, 5, 7]

console.log(mySumCalculator(myArray)); // console log shows 22

function mySumCalculator(arr) {
    // here we will put the sum of all numbers in arrray arr
    var sum = 0;

    for (var i = 0; i < arr.length; i++) {

        if (!arr[i]) { // null, "", undefined are falsy values -- "false". With ! (exclamation) we turn fasle to true so we can pass the IF
            continue; // we skip falsy values null, "", undefined, 0
        }

        if (typeof arr[i] === "string") { // if type of variable is string we skip
            continue;
        }
        //we pass all checks and pretty sure arr[i] is number
        //now we can add value from arr[i] to our sum variable;
        sum += arr[i];
    }

    return sum; // we return sum of all arr[i] values
}
