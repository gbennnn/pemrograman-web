console.log("Hello World");

console.log(20 * 2);

console.log(5 * "Hello");

let nama = "Benony Gabriel";
let nim = "105222002";
console.log("Nama: ", nama);
console.log("NIM: ", nim);

let a = 10;
let b = 20;
let c = "20";
let d = 20.5;

console.log(a == a);
console.log(a == b);
console.log(a === b);
console.log(b == b);
console.log(b == c);
console.log(d == c);

let number = -70;

if (number == 0) {
  console.log("Ini Nol");
} else if (number > 0) {
  console.log(number, " adalah Positif");
} else {
  console.log(number, " adalah Negatif");
}

for (let i = 1; i <= 5; i++) {
  console.log(i, ". Hello For");
}
console.log();

let i = 1;
while (i <= 5) {
  console.log(i, ". Hello While");
  i++;
}

console.log();

let j = 1;
do {
  console.log(j, ". Hello Do");
  j++;
} while (j <= 5);
