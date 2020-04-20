function abbrevName(name) {

    return name.trim().toUpperCase().split(" ").map(part => {
        return part[0];
    }).join(".");

}
