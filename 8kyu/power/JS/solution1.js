function numberToPower(number, power) {
    if (power === 0) {
        return 1;
    }

    let v = number;
    for (let i = 0; i < power - 1; i++) {
        number *= v
    }

    return number
}
