solve(arr);

function solve(arr) {
    for (let input of arr) {
        if (input === 'Stop') {
            return;
        } else {
            console.log(input)
        }
    }
}