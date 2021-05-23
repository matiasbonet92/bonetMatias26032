var jsonJugadores = '{"jugadoresBasquet": [{"codjug" : "lj23","nombre" : "Lebron James","fnac" : "1980-04-23","posicion" : "Alero","equipo" : "Los Angeles Lakers","edad" : 41},{"codjug" : "sc20","nombre" : "Stephen Curry","fnac" : "1990-07-13","posicion" : "Base","equipo" : "Golden State Warriors","edad" : 31},{"codjug" : "ki12","nombre" : "Kyre Irving","fnac" : "1985-09-30","posicion" : "Base","equipo" : "Brooklyn Nets","edad" : 36},{"codjug" : "fc7","nombre" : "Facundo Campazzo","fnac" : "1992-01-03","posicion" : "Base","equipo" : "Denver Nuggets","edad" : 29},{"codjug" : "mj23","nombre" : "Michael Jordan","fnac" : "1970-03-12","posicion" : "Alero","equipo" : "Chicago Bulls","edad" : 51},{"codjug" : "dr30","nombre" : "Derrick Rose","fnac" : "1990-12-06","posicion" : "Ala","equipo" : "New York Knicks","edad" : 31},{"codjug" : "bs00","nombre" : "Ben Simmons","fnac" : "1987-08-23","posicion" : "Pivot","equipo" : "Philadelfia Sixers","edad" : 34},{"codjug" : "ga12","nombre" : "Giannis Antetokuompo","fnac" : "1981-11-02","posicion" : "Pivot","equipo" : "Milwaukee Bucks","edad" : 40},{"codjug" : "nj22","nombre" : "Nicola Jokic","fnac" : "1995-05-22","posicion" : "Ala Pivot","equipo" : "Denver Nuggets","edad" : 26},{"codjug" : "lb11","nombre" : "Lamello Ball","fnac" : "2000-08-23","posicion" : "Base","equipo" : "Charlotte Hornets","edad" : 21},{"codjug" : "mg20","nombre" : "Manu Ginobili","fnac" : "1980-12-13","posicion" : "Alero","equipo" : "San Antonio Spurs","edad" : 41},{"codjug" : "gd00","nombre" : "Gabriel Deck","fnac" : "1998-10-02","posicion" : "Ala Pivot","equipo" : "Oklahoma City Thunder","edad" : 23},{"codjug" : "dl33","nombre" : "Demian Lilliard","fnac" : "2000-11-09","posicion" : "Base","equipo" : "Portland Trail Blazers","edad" : 21},{"codjug" : "ad09","nombre" : "Antony Davis","fnac" : "1988-10-02","posicion" : "Ala Pivot","equipo" : "Los Angeles Lakers","edad" : 33},{"codjug" : "ty76","nombre" : "Tyler Hero","fnac" : "2003-11-13","posicion" : "Alero","equipo" : "Miami Heat","edad" : 18}]}'
var listadoJugadores = JSON.parse(jsonJugadores);

listadoJugadores.jugadoresBasquet.forEach(function(valor,indice){
    var objetoOpcion = document.createElement("option");
    objetoOpcion.setAttribute("className", valor.equipo);
    objetoOpcion.setAttribute("name", valor.equipo);
    objetoOpcion.innerHTML = valor.equipo;
    document.getElementById("equipo").appendChild(objetoOpcion);
});

$("#envio").click(function(){
    $("#form").submit();
});
