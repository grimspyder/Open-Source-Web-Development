document.addEventListener("DOMContentLoaded", function () {
  const cardData = [
    {
      heading: "Direct Drive FFB Wheel",
      Image:
        "https://www.xsimulator.net/community/attachments/20200506_111646_compress23-jpg.72533/",
      body: "Using a large industrial servo motor to drive a sim steering wheel.",
    },
    {
      heading: "FFB Yoke conversion",
      Image:
        "https://www.aerofly.com/community/index.php?attachment/4495-imag0346-jpg/",
      body: "Converted a FFB flight stick to a General Aviation FFB Yoke.",
    },
    {
      heading: "Hybrid Passive Cooling PC",
      Image:
        "https://hackaday.com/wp-content/uploads/2022/10/coolermax_fridge.jpg",
      body: "Cooling a PC with a geothermal heat exhanger and a water cooling loop.",
    },
  ];

  const postContainer = document.querySelector(".card-container");

  const postMethods = () => {
    cardData.map((postData) => {
      const postElement = document.createElement("div");
      postElement.classList.add("card");
      postElement.innerHTML = `
      <h3 class="card-heading">${postData.heading}</h3>
      <img id="card_image "src="${postData.Image}" alt="Card Image" class="card-image" />
      <p class="card-body">${postData.body}</p>
      `;

      // postElement.onclick = () => {
      //   window.open(postData.url, "_blank");
      // };

      postContainer.appendChild(postElement);
    });
  };

  postMethods();
});
