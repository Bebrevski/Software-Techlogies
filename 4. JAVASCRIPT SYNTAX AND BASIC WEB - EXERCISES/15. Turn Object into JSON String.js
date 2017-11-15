let input = ['name -> Angel',
    'surname -> Georgiev',
    'age -> 20','grade -> 6.00',
    'date -> 23/05/1995',
    'town -> Sofia'];

solve(input);

function solve(input) {

    let object = {};

    for (let kvp of input) {

        let currentKVP = kvp.split(' -> ');
        let key = currentKVP[0];
        let value = currentKVP[1];

        if (Number(value)) {
            object[key] = Number(value);
        }else {
            object[key] = value;
        }

    }

    console.log(JSON.stringify(object));
}