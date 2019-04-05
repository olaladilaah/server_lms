<Style>
* {
  box-sizing: border-box;
  -webkit-transition: 0.3s cubic-bezier(0.75, 0, 0.2, 1), color 0.3s ease;
  transition: 0.3s cubic-bezier(0.75, 0, 0.2, 1), color 0.3s ease;
}
.rela-block {
  display: block;
  position: relative;
  margin: auto;
  top: ;
  left: ;
  right: ;
  bottom: ;
}
.rela-inline {
  display: inline-block;
  position: relative;
  margin: auto;
  top: ;
  left: ;
  right: ;
  bottom: ;
}
.floated {
  display: inline-block;
  position: relative;
  margin: false;
  top: ;
  left: ;
  right: ;
  bottom: ;
  float: left;
}
.floated.right {
  float: right;
}
.abs-center {
  display: false;
  position: absolute;
  margin: false;
  top: 50%;
  left: 50%;
  right: false;
  bottom: false;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  text-align: center;
  width: 88%;
}
.vert-center {
  display: false;
  position: absolute;
  margin: false;
  top: 50%;
  left: ;
  right: ;
  bottom: ;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
.horz-center {
  display: false;
  position: absolute;
  margin: false;
  top: false;
  left: 50%;
  right: false;
  bottom: false;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}
body {
  font-family: "Roboto";
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 400;
  line-height: 24px;
  background-color: #f4f4f4;
}
.blurred {
  -webkit-filter: blur(2px);
          filter: blur(2px);
}
.overlay {
  z-index: -1;
  display: false;
  position: fixed;
  margin: false;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.7);
  text-align: center;
  opacity: 0;
}
.overlay.active {
  z-index: 100;
  opacity: 1;
}
.overlay.active .overlay-image {
  opacity: 1;
}
.overlay-card {
  height: 75vh;
  min-height: 400px;
  width: calc(92% - 40px);
  max-width: 1086px;
  padding-left: 30px;
  background-color: #f4f4f4;
  border-radius: 2px;
  overflow: hidden;
}
.overlay-image {
  height: 100%;
  width: 480px;
  opacity: 0;
  -webkit-transition: 0.3s cubic-bezier(0.75, 0, 0.2, 1), opacity 0.2s 0.3s ease;
  transition: 0.3s cubic-bezier(0.75, 0, 0.2, 1), opacity 0.2s 0.3s ease;
}
.overlay-desc {
  font-family: "Roboto";
  font-size: 16px;
  letter-spacing: 0px;
  font-weight: 400;
  line-height: 20px;
  height: calc(100% - 40px);
  margin: 20px;
  border-left: 1px solid #ccc;
  width: calc(100% - 520px);
  padding: 20px 20px 20px 40px;
  overflow-x: hidden;
  overflow-y: auto;
}
.overlay-desc::-webkit-scrollbar {
  width: 6px;
}
.overlay-desc::-webkit-scrollbar-thumb {
  background-color: #999;
}
.post-image {
  height: 100%;
  max-height: 400px;
  width: 480px;
  border: 20px solid #fff;
  box-shadow: 0 4px 8px -2px rgba(0,0,0,0.25);
  background-size: cover !important;
  cursor: pointer;
}
.desc-title {
  font-family: "Montserrat";
  font-size: 24px;
  letter-spacing: 2px;
  font-weight: 400;
  line-height: 28px;
  margin-bottom: 5px;
}
.desc-author {
  font-family: "Montserrat";
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 400;
  line-height: 24px;
  color: #999;
  margin-bottom: 10px;
}
.close {
  z-index: 100;
  display: false;
  position: absolute;
  margin: false;
  top: 10px;
  left: ;
  right: 15px;
  bottom: ;
  font-family: "Montserrat";
  font-size: 24px;
  letter-spacing: 0px;
  font-weight: 400;
  line-height: 30px;
  cursor: pointer;
  color: #444;
  padding: 5px;
}
.nav-bar {
  display: false;
  position: fixed;
  margin: false;
  top: 0;
  left: 0;
  right: 0;
  bottom: false;
  z-index: 10;
  height: 70px;
  background-color: #fff;
  box-shadow: 0px 2px 18px rgba(0,0,0,0.3);
}
.nav-container {
  width: 100%;
  max-width: 1400px;
}
.logo {
  font-family: "Yellowtail";
  font-size: 34px;
  letter-spacing: 0px;
  font-weight: 400;
  line-height: 70px;
  margin: 0 30px;
  cursor: pointer;
}
.logo:hover {
  color: #2ebaae;
}
.nav-div {
  font-family: "Roboto";
  font-size: 17px;
  letter-spacing: 2px;
  font-weight: 400;
  line-height: 24px;
  height: 70px;
  line-height: 70px;
  margin: 0 10px;
  color: #999;
  overflow: hidden;
}
.nav-div li {
  padding: 0 9px;
  cursor: pointer;
}
.nav-div li:hover {
  color: #2ebaae;
}
.nav-links {
  margin: 0;
  width: 450px;
}
.search-container {
  padding-right: 15px;
  margin-left: 0px;
}
.sign-div {
  margin: 0px;
  width: 180px;
  -webkit-transition: 0.3s cubic-bezier(0.75, 0, 0.2, 1), opacity 0.15s 0.3s cubic-bezier(0.75, 0, 0.2, 1);
  transition: 0.3s cubic-bezier(0.75, 0, 0.2, 1), opacity 0.15s 0.3s cubic-bezier(0.75, 0, 0.2, 1);
}
.sign-div li {
  padding: 0 0 0 20px;
}
.sign-div.active {
  width: 0px;
  opacity: 0;
  -webkit-transition: 0.15s cubic-bezier(0.75, 0, 0.2, 1), width 0.3s 0.15s cubic-bezier(0.75, 0, 0.2, 1);
  transition: 0.15s cubic-bezier(0.75, 0, 0.2, 1), width 0.3s 0.15s cubic-bezier(0.75, 0, 0.2, 1);
}
.icon {
  height: 40px;
  width: 40px;
  margin: 0 6px;
  vertical-align: middle;
  cursor: pointer;
  background-size: 30px !important;
}
.icon.search-icon {
  background: url("https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-128.png") no-repeat;
  background-position: 3px 3px;
}
.nav-search {
  font-family: "Roboto";
  font-size: 16px;
  letter-spacing: 0px;
  font-weight: 400;
  line-height: 20px;
  border: none;
  border-bottom: 1px solid #999;
  width: 0px;
}
.nav-search:focus {
  outline: none;
}
.nav-search.active {
  width: 180px;
  -webkit-transition: 0.3s cubic-bezier(0.75, 0, 0.2, 1), width 0.3s 0.15s cubic-bezier(0.75, 0, 0.2, 1);
  transition: 0.3s cubic-bezier(0.75, 0, 0.2, 1), width 0.3s 0.15s cubic-bezier(0.75, 0, 0.2, 1);
}
.menu-card {
  display: false;
  position: fixed;
  margin: false;
  top: 72px;
  left: 420px;
  right: false;
  bottom: false;
  font-family: "Montserrat";
  font-size: 16px;
  letter-spacing: 1px;
  font-weight: 400;
  line-height: 20px;
  z-index: 15;
  height: 200px;
  width: 280px;
  overflow: hidden;
  box-shadow: 0px 2px 18px -4px rgba(0,0,0,0);
  border-radius: 2px;
  -webkit-transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.2s ease;
  transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.2s ease;
  pointer-events: none;
}
.menu-card.active {
  box-shadow: 0px 5px 18px -3px rgba(0,0,0,0.3);
  -webkit-transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.25s 0.25s ease;
  transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.25s 0.25s ease;
  pointer-events: auto;
}
.menu-background {
  height: 0px;
  width: 0px;
  top: 5%;
  left: 93%;
  border-radius: 100%;
  background-color: #fff;
}
.menu-background.active {
  height: 540px;
  width: 540px;
  top: 50%;
  left: 50%;
  -webkit-transition: 0.3s cubic-bezier(0.5, 0, 0.2, 1), height 0.3s cubic-bezier(1, 0.15, 0.6, 1), width 0.3s cubic-bezier(1, 0.15, 0.6, 1);
  transition: 0.3s cubic-bezier(0.5, 0, 0.2, 1), height 0.3s cubic-bezier(1, 0.15, 0.6, 1), width 0.3s cubic-bezier(1, 0.15, 0.6, 1);
}
.menu-content {
  display: false;
  position: absolute;
  margin: false;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  padding: 15px;
  opacity: 0;
  -webkit-transition: 0.1s ease;
  transition: 0.1s ease;
}
.menu-content.active {
  opacity: 1;
  -webkit-transition: 0.3s 0.3s ease;
  transition: 0.3s 0.3s ease;
}
.menu-links {
  overflow: hidden;
  color: #999;
}
.menu-links li {
  padding: 4px 10px;
  margin: 4px 0;
  cursor: pointer;
}
.menu-links li:hover {
  color: #2ebaae;
}
.menu-links.sub-nav-links {
  height: 0px;
}
.menu-links.sign-links {
  height: 0px;
}
.container {
  z-index: 1;
  width: 92%;
  max-width: 1126px;
  background-color: #f4f4f4;
  margin: 70px auto;
  padding: 70px 0;
}
.profile-card {
  width: calc(100% - 40px);
  padding-top: 100px;
  margin: 70px auto 30px;
  background-color: #fff;
  box-shadow: 0 2px 6px -2px rgba(0,0,0,0.26);
}
.profile-pic {
  display: false;
  position: absolute;
  margin: false;
  top: -90px;
  left: 50%;
  right: false;
  bottom: false;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  height: 180px;
  width: 180px;
  border: 10px solid #fff;
  border-radius: 100%;
  background: url("https://pbs.twimg.com/media/CdbiubzVIAANj8J.jpg") center no-repeat;
  background-size: cover;
}
.profile-name-container {
  margin: 0 auto 10px;
  padding: 10px;
  text-align: center;
}
.user-name {
  font-family: "Montserrat";
  font-size: 24px;
  letter-spacing: 3px;
  font-weight: 400;
  line-height: 30px;
  margin-bottom: 12px;
}
.user-desc {
  letter-spacing: 1px;
  color: #999;
}
.profile-card-stats {
  height: 75px;
  padding: 10px 0px;
  text-align: center;
  overflow: hidden;
}
.profile-stat {
  height: 100%;
  width: 33.3333%;
}
.profile-stat:after {
  color: #999;
}
.works::after {
  content: "works";
}
.followers::after {
  content: "followers";
}
.following::after {
  content: "following";
}
.image {
  width: 240px;
  height: 200px;
  cursor: pointer;
  margin: 0 20px 40px;
  overflow: hidden;
  border-radius: 5px;
  border: 10px solid #fff;
  box-shadow: 0 2px 6px -2px rgba(0,0,0,0.26);
  background-color: rgba(0,0,0,0.4);
  background-size: cover !important;
  -webkit-transition: 0.2s cubic-bezier(0.5, 0, 0.2, 1);
  transition: 0.2s cubic-bezier(0.5, 0, 0.2, 1);
}
.image:hover {
  -webkit-transform: scale(1.06);
          transform: scale(1.06);
  box-shadow: 0 2px 18px -2px rgba(0,0,0,0.3);
}
.image.hidden {
  height: 0;
  width: 0px;
  margin: 0px;
  border: 0px solid #fff;
}
.button {
  font-family: 'Montserrat';
  font-size: 14px;
  letter-spacing: 4px;
  font-weight: 900;
  line-height: 20px;
  min-width: 200px;
  padding: 20px 40px;
  color: #444;
  text-align: center;
  text-transform: uppercase;
  cursor: pointer;
  border: 1px solid #bbb;
  margin: 0 20px;
}
.button:hover {
  color: #2ebaae;
  border: 1px solid #2ebaae;
}
.button.inactive {
  color: #bbb;
  cursor: default;
}
.button.inactive:hover {
  color: #bbb;
  border: 1px solid #bbb;
}
.footer {
  min-height: 240px;
  border-top: 1px solid #d6d6d6;
  background-color: #fff;
  padding: 30px 40px;
  text-align: center;
  overflow: hidden;
}
@media screen and (max-width: 1300px) {
  .container {
    max-width: 843px;
  }
  .overlay-card {
    max-width: 803px;
    padding: 0;
  }
  .overlay-image {
    height: 68%;
    width: 100%;
  }
  .overlay-desc {
    width: 100%;
    height: 32%;
    margin: 0;
    padding: 20px 40px;
  }
}
@media screen and (max-width: 1000px) {
  .container {
    max-width: 562px;
  }
  .overlay-card {
    max-width: 522px;
    min-width: 310px;
  }
  .overlay-image {
    width: 100%;
    height: 55%;
    max-height: 1000px;
    margin: 0;
  }
  .post-image {
    width: 396px;
    height: 330px;
    border: 0px solid #fff;
    box-shadow: 0 0 0 rgba(0,0,0,0);
    background-size: contain !important;
  }
  .overlay-desc {
    width: 100%;
    height: 45%;
    padding: 20px;
  }
  .nav-links {
    width: 0px;
  }
  .menu-background {
    left: 8%;
  }
  .menu-card {
    left: 2px;
    height: 360px;
  }
  .menu-content .sub-nav-links {
    height: 164px;
    border-bottom: 1px solid #ccc;
  }
}
@media screen and (max-width: 630px) {
  .image {
    width: calc(100% - 40px);
    height: 0px;
    padding-bottom: 60%;
  }
  .menu-content .sign-links {
    height: 64px;
    border-top: 1px solid #ccc;
  }
  .menu-card {
    height: 425px;
  }
  .sign-div {
    width: 0px;
  }
  .nav-search.active {
    -webkit-transition: 0.3s cubic-bezier(0.75, 0, 0.2, 1);
    transition: 0.3s cubic-bezier(0.75, 0, 0.2, 1);
  }
}
@media screen and (max-width: 550px) {
  .overlay-card {
    height: 500px;
  }
  .post-image {
    width: 80%;
    max-width: 288px;
    height: 240px;
  }
  .overlay-desc {
    padding: 14px;
  }
  .profile-card-stats {
    height: 0;
    padding: 0px;
  }
  .profile-pic {
    height: 140px;
    width: 140px;
    top: -70px;
  }
  .profile-card {
    padding-top: 70px;
    margin: 50px auto 30px;
  }
}
</Style>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" 
    rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- FONTS --><!-- Roboto, Yellowtail, and Montserrat -->
<link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400|Yellowtail" rel="stylesheet">
<!-- PAGE STUFF -->
<div class="overlay">
    <div class="abs-center overlay-card">
        <div class="close">X</div>
        <div class="floated overlay-image">
          <div class="abs-center post-image"></div>
        </div>
          <div class="floated overlay-desc">
            <div class="rela-block desc-title"></div>
            <div class="rela-block desc-author"></div>
            <div class="rela-block desc-desc"></div>
          </div>
    </div>
</div>

<div class="rela-block container">
  <div class="rela-block profile-card">
      <div class="profile-pic" id="profile_pic"></div>
    
    <div class="rela-block profile-name-container">
      <div class="rela-block user-name" id="user_name">User Name Here</div>
      <div class="rela-block user-desc" id="user_description">User Description Here</div>
    </div>

    <div class="entity-info-item-container"> 
      <h3>Memenangkan</h3> 
      <div class="entity-info-description"> 0 Challenge </div> 
    </div>

    <div class="entity-info-item-container"> 
      <h3>Belajar</h3> 
      <div class="entity-info-description"> 2 Kelas Akademi </div> 
    </div>

    <div class="entity-info-item-container"> 
      <h3>Menghadiri</h3> 
      <div class="entity-info-description"> 1 Events </div> 
    </div>

    <div class="entity-info-item-container"> 
      <h3>Asal</h3> 
      <div class="entity-info-description"> Kota Jakarta Barat, DKI Jakarta </div> 
    </div>

    
  </div>

  <div class="row spacier"> <div class="col-xs-12"> <div class="horizontal-overflow-menu"> <ul class="horizontal-overflow-menu-items"> <li role="presentation" class="active"> <a href="https://www.dicoding.com/users/389806">Tentang Saya</a> </li> <li role="presentation" class=""> <a href="https://www.dicoding.com/users/389806/challenges">Challenge</a> </li> <li role="presentation" class=""> <a href="https://www.dicoding.com/users/389806/academies">Academy</a> </li> <li role="presentation" class=""> <a href="https://www.dicoding.com/users/389806/events">Events</a> </li>  <li role="presentation" class=""> <a href="https://www.dicoding.com/users/389806/winningapps">Winning Apps</a> </li> </ul> </div> <div class="spacier"> <div class="item-boxes item-boxes--block"> <div class="spacier"> <p>-</p>  </div> </div> </div> </div> </div>
        
</div>