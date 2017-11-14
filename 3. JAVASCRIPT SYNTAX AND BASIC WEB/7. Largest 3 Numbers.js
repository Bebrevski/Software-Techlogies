let input = [10, 30, 15, 20, 50, 5];

function ThreeLargestNumbers(input) {
    let arr = input.map(Number).sort((a, b) => b - a);

    let counter = 0;
    for (let num of arr) {
        console.log(num);
        counter++;
        if (counter === 3) {
            break;
        }
    }
}

ThreeLargestNumbers(input);