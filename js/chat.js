document.addEventListener("DOMContentLoaded", function() {
    const chatForm = document.getElementById("chat-form");
    const chatMessages = document.getElementById("chat-messages");
  
    chatForm.addEventListener("submit", function(e) {
      e.preventDefault();
  
      const nameInput = document.getElementById("name");
      const messageInput = document.getElementById("message");
      const name = nameInput.value;
      const message = messageInput.value;
  
      if (name.trim() === "" || message.trim() === "") {
        return;
      }
  
      fetch("save_message.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `name=${encodeURIComponent(name)}&message=${encodeURIComponent(message)}`,
      })
        .then(response => response.text())
        .then(result => {
          console.log(result);
  
          const chatEntry = document.createElement("div");
          chatEntry.classList.add("chat-entry");
          chatEntry.innerHTML = `<p><strong>${name}</strong>: ${message}</p><hr class="chat-line">`;
  
          chatMessages.appendChild(chatEntry);
  
          nameInput.value = "";
          messageInput.value = "";
        })
        .catch(error => {
          console.error(error);
        });
    });
  });
  