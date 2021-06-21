// console.log("Admin");

require("./bootstrap");

const delForm = document.querySelectorAll(".delete-post-form");
console.log(delForm);

delForm.forEach(from => {
    from.addEventListener("submit", function(e) {
        const resp = confirm(`Are you sure you want to delete this?`);
        console.log(resp);

        if (!resp) {
            e.preventDefault();
        }
    });
});
