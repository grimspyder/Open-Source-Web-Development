document.addEventListener("DOMContentLoaded", function () {
  function aboutPage() {
    // const aboutPageElement = document.getElementById("aboutPage");
    // aboutPageElement.innerText = `"This is the about page"`;

    // Article element
    const article = document.createElement("article");

    // Heading element
    const heading = document.createElement("h2");
    heading.textContent = "About Me";

    // Paragraph element
    const paragraph = document.createElement("p");
    paragraph.textContent = "This is the about page";

    // Person object
    const person = {
      firstname: "John",
      lastname: "Soler",
      age: 48,
    };

    // Elements for person object properties
    const firstnameElement = document.createElement("p");
    firstnameElement.textContent = `First Name: ${person.firstname}`;

    const lastnameElement = document.createElement("p");
    lastnameElement.textContent = `Last Name: ${person.lastname}`;

    const ageElement = document.createElement("p");
    ageElement.textContent = `Age: ${person.age}`;

    // Append elements to article element
    article.appendChild(heading);
    article.appendChild(paragraph);
    article.appendChild(firstnameElement);
    article.appendChild(lastnameElement);
    article.appendChild(ageElement);

    // Append the article element to the element with the ID 'aboutPage'
    const aboutPageElement = document.getElementById("aboutPage");
    aboutPageElement.appendChild(article);
  }

  aboutPage();
});
