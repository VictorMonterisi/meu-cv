function downloadPDF() {
    const documentoCV = document.querySelector('body') // Seleciona o conteúdo que será convertido para PDF

    documentoCV.classList.add('adapt-pdf') // Adiciona a classe que adaptará o estilo

    let options = {
        margin: 0,
        filename: "Victor Monterisi CV.pdf",
        jsPDF: {unit: 'in', format: 'letter', orientation: 'portrait'}
    } // Parâmetros de formato para o funcionamento da biblioteca html2pdf
    
    html2pdf().set(options).from(documentoCV).save() // Chama a biblioteca, adiciona os parâmetros e faz o download do PDF

    setTimeout(
        () => {
            window.location.reload(false)
        }, 3000
    ) // Recarrega a página após 3 segundos, retornando-a ao estilo padrão
}