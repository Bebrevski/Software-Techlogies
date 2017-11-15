let input = ['key value', 'key eulav', 'test tset', 'key'];

solve(input);

function solve(input) {

    let dict = {};

    for (let i = 0; i < input.length - 1; i++) {

        let kvp = input[i].split(' ');
        let key = kvp[0];
        let value = kvp[1];

        dict[key] = value;
    }

    let outputKey = input[input.length - 1];

    if (dict.hasOwnProperty(outputKey)) {

        let arr = dict[outputKey];
        console.log(arr);

    } else {
        console.log('None');
    }
}