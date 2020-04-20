function arrayPlusArray(arr1, arr2) {
    let sum = 0;

    arr1.forEach(number => { sum += number });
    arr2.forEach(number => { sum += number });

    return sum;
}
