
let printBtn = document.createElement('button');

printBtn.innerHTML  = 'print';
printBtn.addEventListener('click', printTable);

function printTable() {
    print()
}


document.body.appendChild(printBtn);
