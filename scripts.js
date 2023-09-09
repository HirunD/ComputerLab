const signup = document.getElementById("signlog")
const join = document.getElementById("join")
const btn = document.getElementById("btn")


btn.addEventListener("click", () => {
    event.preventDefault();
    signup.style.display = "none";
    join.style.display = "none";
})