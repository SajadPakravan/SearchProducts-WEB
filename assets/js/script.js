document.addEventListener("DOMContentLoaded", () => {
  const products = document.querySelectorAll("#product");
  const popup = document.getElementById("popup");
  const setProducts = document.querySelectorAll(".set-products");
  const closePopup = document.getElementById("closePopup");

  products.forEach((product, index) => {
    const buyButton = product.querySelector("#buy");
    const setButton = product.querySelector("#set");

    buyButton.addEventListener("click", () => {
      const redirect = window.open("views/redirect.html", "_blank");

      if (redirect) {
        setTimeout(() => {
          redirect.location.href = "https://www.digikala.com";
        }, 2000);
      } else {
        alert("لطفاً باز شدن پاپ‌آپ را فعال کنید");
      }
    });

    setButton.addEventListener("click", () => {
      popup.classList.add("show");
      setButton.classList.add("clicked");
      product.classList.add("clicked");
      document.body.style.overflow = "hidden";
    });
  });

  setProducts.forEach((product, index) => {
    const buyButtons = product.querySelectorAll("#buy");

    buyButtons.forEach((buyButton, index) => {
      buyButton.addEventListener("click", () => {
        const redirect = window.open("views/redirect.html", "_blank");

        if (redirect) {
          setTimeout(() => {
            redirect.location.href = "https://www.digikala.com";
          }, 2000);
        } else {
          alert("لطفاً باز شدن پاپ‌آپ را فعال کنید");
        }
      });
    });
  });

  closePopup.addEventListener("click", () => {
    popup.classList.remove("show");
    document.body.style.overflow = "";
    setButtons = document.querySelectorAll(".p-btn.clicked");
    setButtons.forEach((button) => button.classList.remove("clicked"));
    productElements = document.querySelectorAll(".clicked");
    productElements.forEach((product) => product.classList.remove("clicked"));
  });
});
