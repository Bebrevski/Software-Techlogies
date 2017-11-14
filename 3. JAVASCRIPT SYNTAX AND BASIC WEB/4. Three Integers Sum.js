function checkForSum([input]) {
    let arr = input.split(' ').map(Number).sort((a, b) => a - b);

    let num1 = arr[0];
    let num2 = arr[1];
    let num3 = arr[2];

    if(num1 + num2 == num3){
        console.log(`${Math.min(num1, num2)} + ${Math.max(num1, num2)} = ${num3}`)
    }else if(num1 + num3 == num2){
        console.log(`${Math.min(num1, num3)} + ${Math.max(num1, num3)} = ${num2}`)
    }else if (num2 + num3 == num1){
        console.log(`${Math.min(num2, num3)} + ${Math.max(num2, num3)} = ${num1}`)
    }else {
        console.log('No');
    }
}

checkForSum(['8 15 7']);