function navigate(section) {
  console.log("Navigating to: " + section);
  alert("You clicked on " + section + " section!");
}
function shopNow() {
  window.location.href = "shop.php"; // Redirect to shop page
}
function viewCategory(page) {
  window.location.href = page; // Redirect to category page
}
function addToCart(productName) {
  alert(productName + " added to cart 🛒");
}
document.querySelectorAll('.feature-card').forEach(card => {
  card.addEventListener('click', () => {
    alert("You clicked on: " + card.querySelector("h3").innerText);
  });
});
document.querySelectorAll('.farmer-card').forEach(card => {
  card.addEventListener('click', () => {
    alert("Farmer: " + card.querySelector("h3").innerText + "\nCrops: " + card.querySelector(".crops").innerText);
  });
});
document.querySelector(".cta-btn").addEventListener("click", () => {
  console.log("CTA Button Clicked - Redirecting...");
});
document.querySelector(".newsletter-form").addEventListener("submit", (e) => {
  let email = document.querySelector("input[name='email']").value;
  if (!email.includes("@")) {
    e.preventDefault();
    document.getElementById("msg").style.color = "red";
    document.getElementById("msg").innerText = "⚠ Please enter a valid email!";
  } else {
    document.getElementById("msg").style.color = "#27ae60";
    document.getElementById("msg").innerText = "✔ Subscribing...";
  }
});
document.querySelector(".contact-form").addEventListener("submit", (e) => {
  let email = document.querySelector("input[name='email']").value;
  let message = document.querySelector("textarea[name='message']").value;

  if (!email.includes("@") || message.trim() === "") {
    e.preventDefault();
    document.getElementById("contact-msg").style.color = "red";
    document.getElementById("contact-msg").innerText = "⚠ Please enter valid email and message!";
  } else {
    document.getElementById("contact-msg").style.color = "#27ae60";
    document.getElementById("contact-msg").innerText = "✔ Sending message...";
  }
});
// Optional: Example - scroll to top functionality
const footerBottom = document.querySelector('.footer-bottom');
footerBottom.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});
