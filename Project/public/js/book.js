document.addEventListener("DOMContentLoaded", () => {

    console.log("Book Module Loaded");

});
document.addEventListener("DOMContentLoaded", () => {

    console.log("Book Module Loaded");


    // =========================
    // FORM VALIDATION
    // =========================

    const form =
        document.querySelector("form");

    if(form)
    {
        form.addEventListener(
            "submit",
            function(event)
            {
                let isValid = true;

                clearErrors();


                // =========================
                // INPUTS
                // =========================

                const genre =
                    document.querySelector(
                        '[name="genre_id"]'
                    );

                const title =
                    document.querySelector(
                        '[name="title"]'
                    );

                const author =
                    document.querySelector(
                        '[name="author"]'
                    );

                const isbn =
                    document.querySelector(
                        '[name="isbn"]'
                    );

                const copies =
                    document.querySelector(
                        '[name="total_copies"]'
                    );

                const shelf =
                    document.querySelector(
                        '[name="shelf_location"]'
                    );

                const year =
                    document.querySelector(
                        '[name="published_year"]'
                    );


                // =========================
                // GENRE
                // =========================

                if(genre.value.trim() === "")
                {
                    showError(
                        genre,
                        "Genre required"
                    );

                    isValid = false;
                }


                // =========================
                // TITLE
                // =========================

                if(title.value.trim().length < 2)
                {
                    showError(
                        title,
                        "Title too short"
                    );

                    isValid = false;
                }


                // =========================
                // AUTHOR
                // =========================

                if(author.value.trim().length < 2)
                {
                    showError(
                        author,
                        "Author name too short"
                    );

                    isValid = false;
                }


                // =========================
                // ISBN
                // =========================

                const isbnPattern =
                    /^[0-9\-]{10,20}$/;

                if(
                    !isbnPattern.test(
                        isbn.value.trim()
                    )
                )
                {
                    showError(
                        isbn,
                        "Invalid ISBN"
                    );

                    isValid = false;
                }


                // =========================
                // COPIES
                // =========================

                if(
                    copies.value <= 0
                )
                {
                    showError(
                        copies,
                        "Copies must be greater than 0"
                    );

                    isValid = false;
                }


                // =========================
                // SHELF
                // =========================

                if(
                    shelf.value.trim().length < 2
                )
                {
                    showError(
                        shelf,
                        "Shelf location too short"
                    );

                    isValid = false;
                }


                // =========================
                // YEAR
                // =========================

                const currentYear =
                    new Date().getFullYear();

                if(
                    year.value.length !== 4 ||
                    year.value > currentYear
                )
                {
                    showError(
                        year,
                        "Invalid published year"
                    );

                    isValid = false;
                }


                // =========================
                // STOP SUBMIT
                // =========================

                if(!isValid)
                {
                    event.preventDefault();
                }
            }
        );
    }


    // =========================
    // SHOW ERROR
    // =========================

    function showError(input, message)
    {
        input.classList.add("input-error");

        const error =
            document.createElement("p");

        error.className =
            "js-error";

        error.innerText =
            message;

        input.parentElement.appendChild(error);
    }


    // =========================
    // CLEAR ERRORS
    // =========================

    function clearErrors()
    {
        document
            .querySelectorAll(".js-error")
            .forEach(error => error.remove());

        document
            .querySelectorAll(".input-error")
            .forEach(input => {
                input.classList.remove("input-error");
            });
    }
        const deleteForms =
        document.querySelectorAll(".delete-form");

    deleteForms.forEach(form => {

        form.addEventListener(
            "submit",
            function(event)
            {
                const confirmed =
                    confirm(
                        "Are you sure you want to delete this book?"
                    );

                if(!confirmed)
                {
                    event.preventDefault();
                }
            }
        );

    });

});