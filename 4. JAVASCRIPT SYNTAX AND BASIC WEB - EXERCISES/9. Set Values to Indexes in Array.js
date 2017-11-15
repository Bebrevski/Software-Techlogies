let arr = ['2', '0 - 5', '0 - 6', '0 - 7'];

solve(arr);

function solve(arr) {

    let n = Number(arr[0]);

    let outputArr = new Array(n).fill(0);

    for (let i = 1; i < arr.length; i++) {
        let splittedArr = arr[i].split(' - ').map(Number);
        let index = splittedArr[0];
        let element = splittedArr[1];

        outputArr[index] = element;
    }

    for (let i = 0; i < n; i++) {
        console.log(outputArr[i]);
    }
}