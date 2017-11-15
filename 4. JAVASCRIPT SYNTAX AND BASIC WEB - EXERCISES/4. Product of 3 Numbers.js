let arr = ['-3 -4 5'];

solve(arr);

function solve(arr) {
    let negArr = arr.map(Number).filter(x => x < 0);

    if (negArr.length % 2 === 0 || negArr.length === 0) {
        console.log('Positive')
    } else {
        console.log('Negative')
    }
}

