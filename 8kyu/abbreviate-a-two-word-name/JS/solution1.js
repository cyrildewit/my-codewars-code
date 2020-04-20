function abbrevName(name){

    let initials = "";
    let parts = name.split(" ")

    for (let i = 0; i < parts.length; i++) {
      initials += parts[i][0];

      if (i !== parts.length - 1) {
        initials +=  "."
      }
    }

    return initials.toUpperCase();
}
