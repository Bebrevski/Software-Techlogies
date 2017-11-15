solve(input);

function solve(input) {

    for (let i = 0; i < input.length; i++) {
        let arrOfObject = input[i].split(' -> ');

        console.log('Name: ' + `${arrOfObject[0]}`);
        console.log('Age: ' + `${arrOfObject[1]}`);
        console.log('Grade: ' + `${arrOfObject[2]}`);

    }
}