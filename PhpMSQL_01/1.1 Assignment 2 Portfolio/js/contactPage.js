document.addEventListener("DOMContentLoaded", function () {
  function contactPage() {
    // Article element
    const article = document.createElement("article");

    // Heading element
    const heading = document.createElement("h2");
    heading.textContent = "Contact Me";

    // Paragraph element
    const paragraph = document.createElement("p");
    paragraph.textContent = "To contact me, please fill out the form below";

    // Append elements to article element
    article.appendChild(heading);
    article.appendChild(paragraph);

    let contact = document.createElement("FORM");
    document
      .getElementById("contactPage")
      .addEventListener("submit", function (event) {
        event.preventDefault();
        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let subject = document.getElementById("subject").value;
        let message = document.getElementById("message").value;
      });

    article.appendChild(contact);

    // Append the article element to the element with the ID 'aboutPage'
    const aboutPageElement = document.getElementById("contactPage");
    aboutPageElement.appendChild(article);
  }

  contactPage();
});
