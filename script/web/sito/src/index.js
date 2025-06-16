document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("addform")

    form.addEventListener("submit", async (e) => {
        e.preventDefault()
        const formData = new FormData(form)

        try {
            const response = await fetch("aggiunta-elemento.php", {
                method: "POST",
                body: formData
            })
            if (response.status == 200){
                window.location.reload()
            }
        }
        catch (ex) {
            console.log(ex)
        }
    })
})