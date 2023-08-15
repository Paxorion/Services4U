const btnSignIn = document.getElementById("sign-in"),
      btnSignup = document.getElementById("sign-up"),
      formRegister = document.querySelector(".register"),
      formLogin = document.querySelector(".login");

btnSignIn.addEventListener("click", e => {
    formRegister.classList.add("hide");
    formLogin.classList.remove("hide")
})

btnSignup.addEventListener("click", e => {
    formLogin.classList.add("hide");
    formRegister.classList.remove("hide")
})



const max = async () => {
    const data = await fetch(`http://localhost/4U3%20proyecto/4U3%20proyecto/4U3%20proyecto/4U3%20proyecto/Pagina_web/Pagina_web/SERVICES%204U/api/api.php`, {
        method: "post",
        headers: {
            "Content-Type": "application/json",
        },
    });
    const res = await data.json();
    console.log(res);
}



