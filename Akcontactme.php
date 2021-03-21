<!DOCTYPE html>
<html>
  <head>
    <title>Titre du document</title>
    <style>
      /* Boîte Popup */
      /* Le Modal (l'arrière-plan) */
      .modal {
      display: none; /* Masqué par défaut */
      position: fixed; /* Rester dans la place */
      z-index: 8888; /* S'asseoir en haut */
      left: 0;
      top: 0;
      width: 100%; /* Largeur complète */
      height: 100%; /* Hauteur complète */
      overflow: auto; /* Activer défilement si nécessaire */
      background-color: rgb(0,0,0); /* Couleur de plan */
      background-color: rgba(0,0,0,0.4); /*  w/ opacité noir*/
      }
      /* Contenu Modal/Boîte*/
      .modal-content {
      background-color: #fefefe;
      margin: 10vh auto; /* 15% d'en haut et centré */
      padding: 20px;
      border: 1px solid #888;
      width: 60%; /* Pouvait être plus ou moins, dépend de la taille de l'écran  */
      }
      @media (min-width: 1366px) {
      .modal-content {
      background-color: #fefefe;
      margin: 10vh auto; /* 15% d'en haut et centré */
      padding: 20px;
      border: 1px solid #888;
      width: 30%; /* Pouvait être plus ou moins, dépend de la taille de l'écran */
      }
      }
      h2, p {
      margin: 0 0 20px;
      font-weight: 400;
      color: #666;
      }
      span{
      color: #666;
      display:block;
      padding:0 0 5px;
      }
      form {
      padding: 25px;
      margin: 25px;
      box-shadow: 0 2px 5px #f5f5f5; 
      background: #eee; 
      }
      input, textarea {
      width: calc(100% - 18px);
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #1c87c9;
      outline: none;
      }
      .contact-form button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #1c87c9; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #2371a0;
      }    
      /* Le bouton Fermer */
      .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      }
      .close:hover,
      .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
      }
      button.button {
      background:none;
      border-top:none;
      outline: none;
      border-right:none;
      border-left:none;
      border-bottom:#02274a 1px solid;
      padding:0 0 3px 0;
      font-size:16px;
      cursor:pointer;
      }
      button.button:hover {
      border-bottom:#a99567 1px solid;
      color:#a99567;
      }
    </style>
  </head>
  <body>
    <h2>Formes Popup Multiples</h2>
    <p>
      <button class="button" data-modal="modalOne">Contacter nous</button>
    </p>
    <p>
      <button class="button" data-modal="modalTwo">Envoyer un formulaire de plainte</button>
    </p>
    <div id="modalOne" class="modal">
      <div class="modal-content">
        <div class="contact-form">
          <a class="close">&times;</a>
          <form action="/">
            <h2>Contacter Nous</h2>
            <div>
              <input class="fname" type="text" name="name" placeholder="Nom">
              <input type="text" name="name" placeholder="Email">
              <input type="text" name="name" placeholder="Nombre de téléphone">
              <input type="text" name="name" placeholder="Site Web">
            </div>
            <span>Message</span>
            <div>
              <textarea rows="4"></textarea>
            </div>
            <button type="submit" href="/">Envoyer</button>
          </form>
        </div>
      </div>
    </div>
    </div>
    <div id="modalTwo" class="modal">
      <div class="modal-content">
        <div class="contact-form">
          <span class="close">&times;</span>
          <form action="/">
            <h2>Formulaire de plainte</h2>
            <div>
              <input class="fname" type="text" name="name" placeholder="Nom">
              <input type="text" name="name" placeholder="Email">
              <input type="text" name="name" placeholder="Nombre de téléphone">
              <input type="text" name="name" placeholder="Site Web">
            </div>
            <span>Message</span>
            <div>
              <textarea rows="4"></textarea>
            </div>
            <button type="submit" href="/">Envoyer</button>
          </form>
        </div>
      </div>
    </div>
    <script>
      var modalBtns = [...document.querySelectorAll(".button")];
      modalBtns.forEach(function(btn){
        btn.onclick = function() {
          var modal = btn.getAttribute('data-modal');
          document.getElementById(modal).style.display = "block";
        }
      });
      
      var closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function(btn){
        btn.onclick = function() {
          var modal = btn.closest('.modal');
          modal.style.display = "none";
        }
      });
      
      window.onclick = function(event) {
        if (event.target.className === "modal") {
          event.target.style.display = "none";
        }
      }
    </script>
  </body>
</html>