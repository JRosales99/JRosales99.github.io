const typed = new Typed('.typed', {
    strings: [
        '<i class="textogenerado">Encuentra la casa de tus sueños.</i>',
        '<i class="textogenerado">Tu hogar ideal te espera aquí.</i>',
        '<i class="textogenerado">La mejor selección de propiedades.</i>', 
        '<i class="textogenerado">Encuentra el lugar perfecto para ti.</i>',
        '<i class="textogenerado">Comienza una nueva vida en tu nuevo hogar.</i>'
    ],
    //stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
	typeSpeed: 75, // Velocidad en mlisegundos para poner una letra,
	startDelay: 300, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
	backSpeed: 75, // Velocidad en milisegundos para borrrar una letra,
	smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
	shuffle: false, // Alterar el orden en el que escribe las palabras.
	backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
	loop: true, // Repetir el array de strings
	loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
	showCursor: true, // Mostrar cursor palpitanto
	cursorChar: '|', // Caracter para el cursor
	contentType: 'html', // 'html' o 'null' para texto sin formato
});
 