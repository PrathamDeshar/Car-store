const wrapper = document.querySelector(".sliderWrapper");
const menuItems = document.querySelectorAll(".menuItem");

const products = [
  {
    id: 1,
    title: "Rolls-Royce",
    price: 450000,
    colors: [
      {
        code: "black",
        img: "./img/rolls.png",
      },
      {
        code: "white",
        img: "./img/rolls2.png",
      },
    ],
  },
  {
    id: 2,
    title: "Bentley",
    price: 200000,
    colors: [
      {
        code: "black",
        img: "./img/bent.png",
      },
      {
        code: "red",
        img: "./img/bent2.png",
      },
    ],
  },
  {
    id: 3,
    title: "Mercedes-Benz",
    price: 300000,
    colors: [
      {
        code: "black",
        img: "./img/merc.png",
      },
      {
        code: "red",
        img: "./img/merc2.png",
      },
    ],
  },
  {
    id: 4,
    title: "BMW",
    price: 350000,
    colors: [
      {
        code: "blue",
        img: "./img/bmw.png",
      },
      {
        code: "yellow",
        img: "./img/bmw2.png",
      },
    ],
  },
  {
    id: 5,
    title: "Audi",
    price: 100000,
    colors: [
      {
        code: "red",
        img: "./img/audi.png",
      },
      {
        code: "black",
        img: "./img/audi2.png",
      },
    ],
  },
];

let choosenProduct = products[0];

const currentProductImg = document.querySelector(".productImg");
const currentProductTitle = document.querySelector(".productTitle");
const currentProductPrice = document.querySelector(".productPrice");
const productColors = document.querySelectorAll(".productDetails .colors .color");

// Initialize colors for first product
const initializeColors = (index) => {
  productColors.forEach((color, colorIndex) => {
    color.style.backgroundColor = products[index].colors[colorIndex].code;
  });
};

initializeColors(0);

menuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    //change the current slide
    wrapper.style.transform = `translateX(${-100 * index}vw)`;

    //change the choosen product
    choosenProduct = products[index];

    //change texts of currentProduct
    currentProductTitle.textContent = choosenProduct.title;
    currentProductPrice.textContent = "$" + choosenProduct.price;
    currentProductImg.src = choosenProduct.colors[0].img;

    //update colors
    initializeColors(index);
  });
});

// Product colors click handler
productColors.forEach((color, index) => {
  color.addEventListener("click", () => {
    currentProductImg.src = choosenProduct.colors[index].img;
  });
});

const productButton = document.querySelector(".productButton");
const payment = document.querySelector(".payment");
const close = document.querySelector(".close");

productButton.addEventListener("click", () => {
  payment.style.display = "flex";
});

close.addEventListener("click", () => {
  payment.style.display = "none";
});

// Search functionality
const searchInput = document.querySelector(".searchInput");
let searchResultsBox = null;

searchInput.addEventListener("input", (e) => {
  const searchTerm = e.target.value.toLowerCase().trim();

  // Remove previous search results if they exist
  if (searchResultsBox) {
    searchResultsBox.remove();
  }

  if (searchTerm === "") return;

  // Filter products based on search term
  const filteredProducts = products.filter((product) =>
    product.title.toLowerCase().includes(searchTerm)
  );

  // Create search results box
  searchResultsBox = document.createElement("div");
  searchResultsBox.className = "searchResults";

  if (filteredProducts.length === 0) {
    searchResultsBox.innerHTML = `<p class="notAvailable">❌ Car not available or out of stock</p>`;
  } else {
    let resultsHTML = "<div class='resultsList'>";
    filteredProducts.forEach((product) => {
      resultsHTML += `
        <div class="resultItem" data-id="${product.id}">
          <img src="${product.colors[0].img}" alt="${product.title}">
          <div class="resultInfo">
            <h4>${product.title}</h4>
            <p>$${product.price}</p>
          </div>
        </div>
      `;
    });
    resultsHTML += "</div>";
    searchResultsBox.innerHTML = resultsHTML;

    // Add click event to result items
    const resultItems = searchResultsBox.querySelectorAll(".resultItem");
    resultItems.forEach((item) => {
      item.addEventListener("click", () => {
        const productId = parseInt(item.getAttribute("data-id"));
        const productIndex = productId - 1;
        
        // Scroll to product and update display
        wrapper.style.transform = `translateX(${-100 * productIndex}vw)`;
        choosenProduct = products[productIndex];
        currentProductTitle.textContent = choosenProduct.title;
        currentProductPrice.textContent = "$" + choosenProduct.price;
        currentProductImg.src = choosenProduct.colors[0].img;

        // Update colors
        currentProductColors.forEach((color, index) => {
          color.style.backgroundColor = choosenProduct.colors[index].code;
        });

        // Clear search
        searchInput.value = "";
        searchResultsBox.remove();
        searchResultsBox = null;
      });
    });
  }

  // Insert search results below search bar
  searchInput.parentElement.appendChild(searchResultsBox);
});

// Close search results when clicking outside
document.addEventListener("click", (e) => {
  if (e.target !== searchInput && searchResultsBox) {
    searchResultsBox.remove();
    searchResultsBox = null;
  }
});