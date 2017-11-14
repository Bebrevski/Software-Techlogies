let arr = ['{"town":"Sofia","income":200}\n',
    '{"town":"Varna","income":120}\n',
    '{"town":"Pleven","income":60}\n',
    '{"town":"Varna","income":70}\n'];

sumByTown(arr);

function sumByTown(arr) {

    let objects = arr.map(JSON.parse);
    let sum = {}; // става и с [] Какъв тип данни е???

    for (let obj of objects) {
        if (obj.town in sum) {  // < = > if(sum.hasOwnProperty(obj.town))
            sum[obj.town] += obj.income;
        } else {
            sum[obj.town] = obj.income;
        }
    }

    //Не може ли да с for loop да се обходят сортираните данни

    let towns = Object.keys(sum).sort();

    for (let town of towns) {
        console.log(`${town} -> ${sum[town]}`);
    }
}