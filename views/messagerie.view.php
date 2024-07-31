<div class="container">
  <div class="row">
    
    <div class="col-md-4">
            <div class="full graph_head">
            <img src="<?= LINK?>assets\images\landing_page\icon.jpeg" class="contact">
            </div>
                </div>

    <div class="col-md-7"> <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
          <div class="heading1 margin_0 text-center">
            <form method="post" action="">
              <div class="form-group">
                <input type="text" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" placeholder="E-Mail">
              </div>
              <div class="form-group">
                <textarea placeholder="Message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary ">Envoyez</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4"> </div>
  </div>
</div>

<style>
   body {
    font-family: Arial, sans-serif;
    background-color: #20B2AA;
}


.container {
    text-align: center;
    margin-top: 100px;
}

.form-container {
    background-color: #FFFFCC;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}

h2 {
    color: #333;
    margin-bottom: 20px;
}

p {
    color: #666;
    margin-bottom: 10px;
}

input {
    width: 300%;
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-bottom: 1px solid #ccc;
}

textarea {
    height: 250px;
    width: 300%;
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-bottom: 1px solid #ccc;
    size-adjust: 100px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.contact{
    height: 300px;
    width: 300px;
    padding-top: 10px;
}


</style>