function mostrarMensagem() {
    alert("Bem-vindo à Ponto Único Personalizados!");
}

function comprar(produto) {
    alert("Você escolheu: " + produto);

    // Se quiser mandar direto pro WhatsApp:
    let numero = "2198392-1115"; // COLOQUE SEU NÚMERO
    let mensagem = `Olá! Tenho interesse em: ${produto}`;

    let url = `https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`;
    
    window.open(url, "_blank");
}