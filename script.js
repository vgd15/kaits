//Adicionando classe ao menu mobile

let menuOpen = document.querySelector('.menu-mob');

menuOpen.addEventListener("click", menuActive);

function menuActive(){
    menuOpen.classList.toggle('active');
};


//Pegando os dados informados pelo usuário e retornando o tamanho do nome e a idade

document.getElementById('formData').addEventListener('submit', function(event) {
    event.preventDefault();

    const nome = document.getElementById('nome').value;
    const dataNascimento = new Date(document.getElementById('data-nascimento').value);

    const tamanhoNome = nome.length;

    const hoje = new Date();
    let idadeAnos = hoje.getFullYear() - dataNascimento.getFullYear();
    let idadeMeses = hoje.getMonth() - dataNascimento.getMonth();

    if (idadeMeses < 0) {
        idadeAnos--;
        idadeMeses += 12;
    }

    const resultado = document.getElementById('resultado');
    resultado.innerHTML = `
        <p><strong>Tamanho do Nome: ${tamanhoNome} caracteres</strong></p>
        <p><strong>Idade: ${idadeAnos} anos e ${idadeMeses} meses</strong></p>
    `;
});



