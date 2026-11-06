/* StudentHub page interactions. Authentication is handled by PHP sessions. */

/* Toggle notification/settings switches */
const toggles = document.querySelectorAll(".toggle");

toggles.forEach(function(toggle) {
    toggle.addEventListener("click", function() {
        toggle.classList.toggle("active");
    });
});

/* Search notices */
const searchBox = document.querySelector(".search");

if (searchBox) {
    searchBox.addEventListener("input", function() {
        const searchText = searchBox.value.toLowerCase();
        const notices = document.querySelectorAll(".notice-large");

        notices.forEach(function(notice) {
            const text = notice.innerText.toLowerCase();
            notice.style.display = text.includes(searchText) ? "flex" : "none";
        });
    });
}

/* Keep the existing profile form demo feedback only. Do not intercept PHP authentication forms. */
const profileForm = document.querySelector(".profile-edit-form");
if (profileForm) {
    profileForm.addEventListener("submit", function(event) {
        event.preventDefault();
        alert("Profile form demo: database saving will be added in a later step.");
    });
}
