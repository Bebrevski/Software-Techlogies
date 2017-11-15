let arr = ['13 13'];

multiplyOrDevide(arr);

function multiplyOrDevide(arr) {
    let newArr = arr.map(Number);
    let num1 = newArr[0];
    let num2 = newArr[1];

    if (num1 <= num2) {
        console.log(num1 * num2);
    } else {
        console.log(num1 / num2);
    }
}