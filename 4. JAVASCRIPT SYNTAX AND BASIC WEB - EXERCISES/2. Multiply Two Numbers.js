let arr = ['2',' 3'];

multiplyNumbers(arr);

function multiplyNumbers(arr) {
    let newArr = arr.map(Number);
    console.log(newArr[0]*newArr[1]);
}