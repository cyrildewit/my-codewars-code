var findAverage = function (nums) {
    return nums.reduce((accumulator, currentValue) => { return accumulator + currentValue }) / nums.length
}
