//ito yung script kapag successful yung submition ng security //question para makaita yung next page
document.querySelector("#submit-btn").addEventListener("click", () => {
	document.querySelector(".container").classList.add("sign-up-mode");
});

document.querySelector("#sign-up-btn").addEventListener("click", () => {
	document.querySelector(".container").classList.add("sign-up-mode");
});
