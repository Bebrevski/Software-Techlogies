symmetric(['100']);

function symmetric([input]) {

    let result = [];
    let origin;
    let reversed;

    for (let i = 1; i <= Number(input); i++) {
        origin = i.toString();
        reversed = Reverse(i);

        if (origin === reversed) {
            result.push(i);
        }
    }

    function Reverse(str) {
        let newStr = str.toString();
        let reversed = '';

        for (let i = newStr.length - 1; i >= 0; i--) {
            reversed += newStr[i];
        }
        return reversed;
    }

    console.log(result.join(' '));
}



