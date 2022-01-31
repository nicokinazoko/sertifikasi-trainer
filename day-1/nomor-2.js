// belum

const input = prompt("Masukkan angka : ");

let i;
for (i = 0; i < input; i++) {

    if (i % 3 == 0 && i % 4 !== 0) {
        console.log("code");
    } else
    if (i % 4 == 0 && i % 3 !== 0) {
        console.log("academy");
    } else
    if (i % 3 == 0 && i % 4 == 0) {
        console.log("code.academy");
    } else {
        console.log(i);
    }
}