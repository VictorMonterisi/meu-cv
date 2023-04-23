function imprimirDocumento() {
    const documentoCV = document.querySelector('body') // Seleciona o conteúdo que será impresso

    documentoCV.classList.add('adapt-print') // Adiciona a classe que adaptará o estilo para impressão

    window.print() // Abre o modal de impressão do navegador
}