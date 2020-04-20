function points(games) {
    let result = 0;

    games.forEach((game) => {
        parts = (game + '').split(":")
        var x = parseInt(parts[0]);
        var y = parseInt(parts[1]);

        result += (x > y) ? 3 : (x === y) ? 1 : 0;
    })

    return result;
}
