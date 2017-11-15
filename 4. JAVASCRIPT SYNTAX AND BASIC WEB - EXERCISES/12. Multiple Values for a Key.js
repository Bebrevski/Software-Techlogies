let input = ['key value', 'key eulav', 'test tset', 'key'];

solve(input);

function solve(input) {

    let dict = {};

    for (let i = 0; i < input.length - 1; i++) {

        let kvp = input[i].split(' ');
        let key = kvp[0];
        let value = kvp[1];

        if (!dict.hasOwnProperty(key)) {
            dict[key] = [];
        }
        dict[key].push(value);
    }

    let outputKey = input[input.length - 1];

    if (dict.hasOwnProperty(outputKey)) {
        for (let obj of dict[outputKey]) {
            console.log(obj);
        }
    }else {
    console.log('None');
    }

}