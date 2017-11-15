let input = ['{"name":"Gosho","age":10,"date":"19/06/2005"}',
    '{"name":"Tosho","age":11,"date":"04/04/2005"}'];

solve(input);

function solve(input) {

    for (let obj of input) {
        let person = JSON.parse(obj);

        console.log('Name: ' + `${person['name']}`);
        console.log('Age: ' + `${person['age']}`);
        console.log('Date: ' + `${person['date']}`);
    }
}