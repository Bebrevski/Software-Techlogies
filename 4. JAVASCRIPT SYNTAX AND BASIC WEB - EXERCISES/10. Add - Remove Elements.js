let input = ['add 3', 'add 5','remove 1', 'add 2'];

solve(input);

function solve(input) {

    let outputArr = [];

    for (let i = 0; i < input.length; i++) {

        let tempArr = input[i].split(' ');
        let command = tempArr[0];

        if (command === 'add') {

            let element = tempArr[1];

            outputArr.push(element);

        } else if (command === 'remove') {

            let index = tempArr[1];

            outputArr.splice(index,1);
        }
    }

    console.log(outputArr.join('\n'));
}