const container = document.querySelector(".container");
const btnCadastrar = document.querySelector("#btn-cadastrar");
const btnLogin = document.querySelector("#btn-login");

btnCadastrar.addEventListener("click", () => {
    container.classList.add("active");
});

btnLogin.addEventListener("click", () => {
    container.classList.remove("active");
});
