<?php require("includes/header.php"); ?>

<main>
  <div class="container d-flex flex-column align-items-center">
    <img src="/php-crash/feedback/img/logo.png" class="w-25 mb-3" alt="" />
    <h2>Feedback</h2>
    <p class="lead text-center">Made with love ❤️</p>
    <form id="form" action="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" />
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Feedback</label>
        <textarea class="form-control" id="content" name="content" placeholder="Enter your feedback"></textarea>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100" />
      </div>
    </form>

    <script>
      document.getElementById("form").addEventListener("submit", async function(event){
        event.preventDefault();
        const data = {
          name: document.getElementById("name").value,
          email: document.getElementById("email").value,
          content: document.getElementById("content").value
        }

        try{
          await fetch("includes/requests.php", {
            method: "POST",
            headers: {
              "Content-Type": "application/x-www-form-urlencoded",
            },
            body: `name=${data.name}&email=${data.email}&content=${data.content}`,
          }).then( (response) => {
            if (!response.ok) {
              throw new Error("Server related error");
            }

            return response.json();
          }).then( (response) => {
            if(response.status){
              alert("Sent!")
            } else {
              alert("Error");
            }
          }).finally( () => {
            this.reset();
          });

        } catch( error ){
          alert(error);
        }
      });
    </script>
  </div>
</main>

<?php require("includes/footer.php"); ?>