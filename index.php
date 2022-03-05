<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://fonts.googleapis.com/css?family=Vollkorn:400,400i,600,700,900&display=swap" rel="stylesheet" >
     <style>
* {
    margin: 0;
    padding: 0;
    font-family: "Vollkorn", serif;
    list-style-type: none;
    text-decoration: none;
    box-sizing: border-box;
    outline: none;
  }
  
  html {
    font-size: 62.5%;
  }
  
  :root {
    --primary-color: #2b81e4;
    --secondary-color: #eee;
    --white-color: #fff;
    --grey-color: #555;
    --light-grey-color: #777;
  }
  
  .center {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .container {
    background-color: var(--secondary-color);
    margin: 3.5rem;
    box-shadow: 0 1rem 3rem var(--grey-color);
    overflow: hidden;
  }
  
  /* End of Common styles */
  
  /* Navbar */
  .navbar-icon {
    width: 5.5rem;
    height: 5.5rem;
    background-color: var(--white-color);
    border-radius: 50%;
    cursor: pointer;
    flex-direction: column;
  }
  
  .open-navbar-icon {
    position: fixed;
    top: 6.5rem;
    left: 6.5rem;
    z-index: 200;
  }
  
  .navbar-icon .line {
    height: 0.2rem;
    width: 3.5rem;
    background-color: var(--light-grey-color);
  }
  
  .open-navbar-icon .line {
    margin: 0.3rem 0;
  }
  
  .navbar-wrapper {
    width: 100vw;
    height: 100vh;
    background-color: rgba(255, 255, 255, 0.7);
    position: fixed;
    left: 0;
    bottom: -100%;
    opacity: 0;
    z-index: 300;
    padding: 3.5rem 5.5rem 3.5rem 3.5rem;
    transition: bottom 0.5s, opacity 0.2s;
  }
  
  .change .navbar-wrapper {
    bottom: 0;
    opacity: 1;
    transition: bottom 0.5s, opacity 0.2s 0.25s;
  }
  
  .navbar {
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)),
      url(images/navbar-bg.jpg) center no-repeat;
    background-size: cover;
    position: relative;
    overflow-y: hidden;
  }
  
  .close-navbar-icon {
    position: absolute;
    top: 2.5rem;
    right: 3rem;
    z-index: 300;
  }
  
  .close-navbar-icon .line {
    position: absolute;
  }
  
  .line-1 {
    transform: rotate(40deg);
  }
  
  .line-2 {
    transform: rotate(-40deg);
  }
  
  .nav-list {
    height: 100%;
    display: flex;
  }
  
  .nav-link {
    font-size: 3rem;
    font-weight: 700;
    color: var(--white-color);
    text-transform: uppercase;
    width: 100%;
    opacity: 0.8;
    position: relative;
    top: -100%;
    transition: all 0.3s;
  }
  
  .change .nav-link {
    top: 0;
  }
  
  .nav-link:hover {
    opacity: 1;
    color: var(--primary-color);
  }
  
  .change .nav-link:nth-child(1) {
    transition: top 1s 0.4s, opacity 0.3s, color 0.3s;
  }
  
  .change .nav-link:nth-child(2) {
    transition: top 1s 0.6s, opacity 0.3s, color 0.3s;
  }
  
  .change .nav-link:nth-child(3) {
    transition: top 1s 0.8s, opacity 0.3s, color 0.3s;
  }
  
  .change .nav-link:nth-child(4) {
    transition: top 1s 1s, opacity 0.3s, color 0.3s;
  }
  
  .change .nav-link:nth-child(5) {
    transition: top 1s 1.2s, opacity 0.3s, color 0.3s;
  }
  /* End of Navbar */
  
  /* Header */
  .header {
    width: 100%;
    height: calc(100vh - 7rem);
    background: linear-gradient(rgba(18, 113, 255, 0.5), rgba(18, 113, 255, 0.3)),
      url(images/header-bg.jpg) center no-repeat;
    background-size: cover;
    position: relative;
    perspective: 100rem;
  }
  
  .header-text {
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    text-shadow: 0 0.3rem 0.5rem var(--grey-color);
  }
  
  .heading {
    font-size: 8rem;
    color: var(--white-color);
  }
  
  .header-paragraph {
    font-size: 3rem;
    font-weight: 500;
    color: var(--secondary-color);
    max-width: 70rem;
    margin: auto;
  }
  
  .logo {
    position: absolute;
    top: 4rem;
    right: 4rem;
  }
  
  .logo h1 {
    display: flex;
  }
  
  .logo h1 span {
    font-size: 2rem;
    font-weight: 900;
    color: var(--primary-color);
    text-transform: uppercase;
    background-color: var(--white-color);
    width: 3.5rem;
    height: 3.5rem;
    margin: 0.5rem;
    border-radius: 50%;
  }
  
  .logo h1 span:nth-child(1) {
    animation: drop-letters 5s 0.1s infinite;
  }
  
  .logo h1 span:nth-child(2) {
    animation: drop-letters 5s 0.2s infinite;
  }
  
  .logo h1 span:nth-child(3) {
    animation: drop-letters 5s 0.3s infinite;
  }
  
  .logo h1 span:nth-child(4) {
    animation: drop-letters 5s 0.4s infinite;
  }
  
  .logo h1 span:nth-child(5) {
    animation: drop-letters 5s 0.5s infinite;
  }
  
  .logo h1 span:nth-child(6) {
    animation: drop-letters 5s 0.6s infinite;
  }
  
  .logo h1 span:nth-child(7) {
    animation: drop-letters 5s 0.7s infinite;
  }
  
  @keyframes drop-letters {
    0% {
      transform: translateY(0);
    }
    10% {
      transform: translateY(0);
    }
    15% {
      transform: translateY(-100%);
    }
    20% {
      transform: translateY(0);
    }
    100% {
      transform: translateY(0);
    }
  }
  
  .header-image {
    width: 35%;
    animation: image-float 150s infinite;
  }
  
  @keyframes image-float {
    0% {
      transform: translateZ(40rem);
      opacity: 1;
    }
    40% {
      transform: translateZ(-500rem) translateX(150rem);
      opacity: 0.8;
    }
    70% {
      transform: translateZ(-1500rem) translateX(800rem);
      opacity: 0.6;
    }
    80% {
      transform: translateZ(-50rem) translateX(100rem);
      opacity: 0.8;
    }
    100% {
      transform: translateZ(40rem);
      opacity: 1;
    }
  }
  /* End of Header */
  
  /* Popular tours */
  .popular-tours {
    padding: 5rem 0 10rem 0;
  }
  
  .popular-tours-heading {
    font-size: 8rem;
    text-align: center;
    margin-bottom: 8rem;
    color: var(--primary-color);
    text-shadow: 0 0.1rem 0.2rem var(--primary-color);
  }
  
  .cards-wrapper {
    display: flex;
    justify-content: space-evenly;
  }
  
  .card {
    width: 35rem;
    position: relative;
    perspective: 150rem;
  }
  
  .card-image {
    width: 100%;
    border-radius: 0.3rem 0.3rem 0 0;
  }
  
  .front-side {
    text-align: center;
    background-color: var(--white-color);
    border-radius: 0.3rem;
    position: relative;
    z-index: 10;
    opacity: 0.9;
    transition: opacity 0.4s, transform 0.4s, box-shadow 0.4s;
  }
  
  .change > .front-side {
    transform: translateZ(-5rem) translateX(3rem);
    box-shadow: 0 2rem 4rem #777;
    opacity: 0.5;
    z-index: 0;
  }
  
  .tour-name {
    font-size: 2.5rem;
    font-weight: 700;
    text-transform: uppercase;
    position: absolute;
    top: 30%;
    right: 1.5rem;
    color: var(--white-color);
    text-shadow: 0 0 1rem #000;
  }
  
  .card-list {
    width: 80%;
    margin: auto;
    padding: 2rem 0 3rem 0;
  }
  
  .card-list-item {
    font-size: 1.6rem;
    font-weight: 500;
    color: var(--light-grey-color);
    margin: 2rem 0;
    border-bottom: 0.1rem solid var(--primary-color);
    padding-bottom: 1.5rem;
  }
  
  .back-side {
    position: absolute;
    top: 0;
    background-color: var(--primary-color);
    width: 100%;
    height: 100%;
    border-radius: 0.3rem;
    box-shadow: 0 2rem 4rem #777;
    flex-direction: column;
    transform: translateZ(-5rem) translateX(3rem);
    opacity: 0.5;
    transition: opacity 0.4s, transform 0.4s, box-shadow 0.4s;
  }
  
  .change > .back-side {
    transform: translateZ(0) translateX(0);
    box-shadow: 0 0.5rem 2rem #aaa;
    opacity: 0.9;
  }
  
  .tour-price {
    font-size: 5rem;
    font-weight: 300;
    color: var(--white-color);
    margin-bottom: 3rem;
  }
  
  .card-button {
    color: var(--primary-color);
    background-color: var(--white-color);
    border: none;
    font-size: 2.5rem;
    padding: 1rem 2rem;
    letter-spacing: 0.2rem;
    border-radius: 5rem;
    cursor: pointer;
  }
  
  .navigation-button {
    position: absolute;
    top: 0.5rem;
    left: 0.5rem;
    padding: 0.5rem;
    background-color: rgba(255, 255, 255, 0.8);
    color: var(--light-grey-color);
    border-radius: 0.3rem;
    border: none;
    font-size: 1.5rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.2rem;
    cursor: pointer;
  }
  /* End of Popular tours */

  /* Section 3 */
.section-3 {
  background-color: #333;
  padding: 5rem 0;
}

.section-heading {
  font-size: 12rem;
  font-weight: 900;
  color: #fff;
  text-align: center;
  text-transform: capitalize;
  letter-spacing: 0.5rem;
  text-shadow: 0.3rem 0.3rem 0.3rem #000;
}

.gallery {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-evenly;
  margin-top: 10rem;
}

.gallery-link {
  position: relative;
  margin: 4rem 1rem;
}

.gallery-link::before {
  content: "";
  position: absolute;
  top: 2vw;
  left: 80%;
  width: 0.2rem;
  height: 0;
  background-color: #fff;
  z-index: 10;
  transition: height 0.5s;
}

.gallery-link::after {
  content: "";
  position: absolute;
  top: 30%;
  left: 2rem;
  width: 0;
  height: 0.2rem;
  background-color: #fff;
  transition: width 0.5s;
}

.gallery-link:hover::before {
  height: 80%;
}

.gallery-link:hover::after {
  width: 90%;
}

.food-img {
  width: 24vw;
  height: 15vw;
  object-fit: cover;
  box-shadow: 0.3rem 0.3rem 0.1rem #e92929, 0.5rem 0.5rem 0.1rem #a2e946,
    0.7rem 0.7rem 0.1rem #297ce9, 0.9rem 0.9rem 0.1rem #e92999;
  transition: all 0.5s;
}

.gallery-link:hover .food-img {
  box-shadow: 1rem 1rem 0.1rem #e92929, 2rem 2rem 0.1rem #a2e946,
    3rem 3rem 0.1rem #297ce9, 4rem 4rem 0.1rem #e92999;
  transform: scale(1.1);
  filter: blur(0.5rem);
  opacity: 0.5;
}

.food-name {
  position: absolute;
  top: 3rem;
  left: 3rem;
  font-size: 2rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.1rem;
  color: #fff;
  width: 0;
  overflow: hidden;
  transition: width 0.3s;
}

.gallery-link:hover .food-name {
  width: 100%;
  transition: width 1.5s 0.5s;
}

.food-description {
  position: absolute;
  bottom: 3vw;
  left: 2rem;
  width: 70%;
  font-size: 1.5rem;
  font-weight: 300;
  letter-spacing: 0.1rem;
  text-transform: uppercase;
  color: #fff;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s;
}

.gallery-link:hover .food-description {
  opacity: 1;
  visibility: visible;
  transition: opacity 1s 1s;
}
/* End of Section 3 */
  
  /* Stories */
  .stories {
    padding: 10rem 0;
    position: relative;
  }
  
  .video-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.4;
  }
  
  .bg-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .stories-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  .story-bg {
    background-color: rgba(238, 238, 238, 0.85);
    padding: 5rem;
    margin: 5rem;
    width: 70%;
    box-shadow: 0 2rem 5rem rgba(51, 51, 51, 0.4);
    transform: skewX(20deg);
  }
  
  .story {
    transform: skewX(-20deg);
    display: flex;
  }
  
  .story-image {
    width: 20rem;
    height: 20rem;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 5rem;
  }
  
  .story-text {
    letter-spacing: 0.1rem;
  }
  
  .story-heading {
    font-size: 2.5rem;
    text-transform: uppercase;
    color: var(--grey-color);
    margin-bottom: 1rem;
  }
  
  .story-paragraph {
    font-size: 1.8rem;
    color: var(--light-grey-color);
  }
  
  .story-paragraph::first-letter {
    margin-left: 1rem;
  }
  /* End of Stories */
  
  /* Contact */
  .contact {
    padding: 15rem 0 20rem 0;
    text-align: center;
    background: url(images/contact-us-bg.png) center no-repeat;
    background-size: cover;
    animation: contact-bg 35s infinite;
  }
  
  .contact-heading {
    font-size: 7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5rem;
    color: var(--white-color);
    text-shadow: 0 1rem 2rem #000;
    margin-bottom: 8rem;
  }
  
  .contact-form {
    width: 70rem;
    height: 50rem;
    background-color: rgba(255, 255, 255, 0.95);
    margin: auto;
    flex-direction: column;
    border-radius: 0.5rem;
    box-shadow: 0 1rem 3rem #000;
    padding: 5rem;
  }
  
  .input-group {
    width: 100%;
    display: flex;
    flex-direction: column;
    margin: 1rem 0;
    position: relative;
  }
  
  .input-groups {
    width: 100%;
    display: flex;
    justify-content: space-between;
  }
  
  .input-groups .input-group {
    width: 48.5%;
  }
  
  .input-group input,
  .input-group textarea {
    padding: 3rem 1rem 1rem 1rem;
    background-color: var(--secondary-color);
    border: 0.1rem solid var(--secondary-color);
    font-size: 1.4rem;
    color: var(--light-grey-color);
    letter-spacing: 0.1rem;
    border-radius: 0.5rem;
    transition: border 0.3s;
  }
  
  .input-group input:focus,
  .input-group textarea:focus {
    border: 0.1rem solid #ccc;
  }
  
  .input-group label {
    font-size: 1.2rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    color: var(--grey-color);
    position: absolute;
    top: 1rem;
    left: 1rem;
  }
  
  .form-btn {
    width: 100%;
    padding: 1rem;
    font-size: 1.6rem;
    letter-spacing: 0.1rem;
    margin-top: 1rem;
    background-color: var(--light-grey-color);
    color: var(--white-color);
    border-radius: 0.5rem;
    border: none;
    cursor: pointer;
    transition: background-color 0.4s;
  }
  
  .form-btn:hover {
    background-color: var(--grey-color);
  }
  
  .input-group textarea {
    max-height: 15rem;
    max-width: 100%;
  }
  
  @keyframes contact-bg {
    0% {
      background-color: #3d3d3d;
    }
    25% {
      background-color: #ced8e4;
    }
    50% {
      background-color: #1e81f3;
    }
    75% {
      background-color: #ff7842;
    }
    100% {
      background-color: #3d3d3d;
    }
  }
  /* End of Contact */
  
  /* Footer */
  .footer {
    background-color: var(--grey-color);
    padding: 4rem 0 2rem 0;
  }
  
  .footer-list {
    display: flex;
    justify-content: center;
  }
  
  .footer-link {
    font-size: 2rem;
    color: var(--white-color);
    margin: 0 2rem;
    background-color: var(--grey-color);
    padding: 0.3rem 3rem;
    letter-spacing: 0.3rem;
    transition: all 0.2s;
  }
  
  .footer-link:hover {
    transform: rotate(-10deg);
    box-shadow: 0 2rem 3rem #000;
  }
  
  .footer-paragraph {
    text-align: center;
    font-size: 1.5rem;
    color: var(--secondary-color);
    letter-spacing: 0.2rem;
    margin-top: 5rem;
  }
  /* End of Footer */
  
  @media (max-width: 1200px) {
    .cards-wrapper {
      flex-direction: column;
      align-items: center;
    }
  
    .card {
      margin: 3rem 0;
    }
  
    .story-bg {
      width: 85%;
    }
  }
  
  @media (max-width: 1000px) {
    .nav-list {
      flex-direction: column;
    }
  
    .nav-link {
      flex-grow: 1;
    }
  
    .header-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 10;
    }
  
    .heading {
      font-size: 6rem;
    }
  
    .header-paragraph {
      font-size: 2.5rem;
    }
  
    .popular-tours-heading {
      font-size: 6rem;
    }
  
    .story-bg {
      transform: skewX(0);
    }
  
    .story {
      transform: skewX(0);
      flex-direction: column;
      align-items: center;
    }
  
    .story-image {
      margin-bottom: 3rem;
    }
  
    .footer-link {
      padding: 0.3rem 2rem;
      margin: 0 1rem;
    }
  }
  
  @media (max-width: 800px) {
    .header-paragraph {
      display: none;
    }
  
    .popular-tours-heading {
      font-size: 5rem;
    }
  
    .contact-form {
      width: 90%;
    }
  
    .footer-list {
      flex-direction: column;
      align-items: center;
    }
  
    .footer-link {
      margin: 1rem 0;
    }
  }
  
  @media (max-width: 650px) {
    .container {
      margin: 0;
    }
  
    .open-navbar-icon {
      top: 2.5rem;
      left: 2.5rem;
    }
  
    .navbar-wrapper {
      padding: 0;
    }
  
    .close-navbar-icon {
      right: 4rem;
    }
  
    .header {
      height: 100vh;
    }
  
    .contact-heading {
      font-size: 6rem;
    }
  
    .contact-form {
      padding: 2rem;
      height: 40rem;
    }
  }


  
  @media (max-width: 500px) {
    html {
      font-size: 45%;
    }
  }

  </style>
    <title>TRAVEL HERO</title>
</head>
<body>
    <div class="container">
        <!-- Navbar -->
        <div class="open-navbar-icon navbar-icon center">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
        <div class="navbar-wrapper">
          <nav class="navbar">
            <div class="close-navbar-icon navbar-icon center">
              <div class="line line-1"></div>
              <div class="line line-2"></div>
            </div>
            <div class="nav-list">
              <a href="#header center" class="nav-link center">Home</a>
              <a href="#tours" class="nav-link center">Tours</a>
              <a href="#" class="nav-link center">About Us</a>
              <a href="#" class="nav-link center">Offer</a>
              <a href="#contact us" class="nav-link center">Contact</a>
            </div>
          </nav>
        </div>
        <!-- End of Navbar -->
  
        <!-- Header -->
        <header class="header center" id="header center">
          <div class="header-text">
            <h1 class="heading">TRAVEL HERO</h1>
            <p class="header-paragraph">
              "Traveling - it leaves you speechless, then turns you into a storyteller"
            </p>
          </div>
          <img
            src="images/air-balloon.png"
            alt="Header Image"
            class="header-image">
          <div class="logo">
            <h1>
              <span class="center">T</span>
              <span class="center">R</span>
              <span class="center">A</span>
              <span class="center">V</span>
              <span class="center">E</span>
              <span class="center">L</span>
            </h1>
          </div>
         
        </header>
        <!-- End of Header -->
  
        <!-- Popular tours -->
        <section class="popular-tours" id="tours">
          <h1 class="popular-tours-heading"> Popular Treking Places</h1>
          <div class="cards-wrapper">
            <div class="card">
              <div class="front-side">
                <img src="images/forest.jpg" alt="Forest" class="card-image" />
                <h1 class="tour-name">The wild forest</h1>
                <ul class="card-list">
                  <li class="card-list-item">7 days tour</li>
                  <li class="card-list-item">Up to 20 people</li>
                  <li class="card-list-item">4 tour guides</li>
                  <li class="card-list-item">Sleep in private tents</li>
                  <li class="card-list-item">Difficulty: medium</li>
                </ul>
                <button class="navigation-button">
                  price &gt;&gt;
                </button>
              </div>
              <div class="back-side center">
                <button class="navigation-button">
                  &lt;&lt; back
                </button>
                <h3 class="tour-price">$399</h3>
                <button class="card-button">Booking</button>
              </div>
            </div>
            <div class="card">
              <div class="front-side">
                <img src="images/river.jpg" alt="River" class="card-image" />
                <h1 class="tour-name">Along the river</h1>
                <ul class="card-list">
                  <li class="card-list-item">9 days tour</li>
                  <li class="card-list-item">Up to 30 people</li>
                  <li class="card-list-item">7 tour guides</li>
                  <li class="card-list-item">Sleep in private tents</li>
                  <li class="card-list-item">Difficulty: hard</li>
                </ul>
                <button class="navigation-button">
                  price &gt;&gt;
                </button>
              </div>
              <div class="back-side center">
                <button class="navigation-button">
                  &lt;&lt; back
                </button>
                <h3 class="tour-price">$499</h3>
                <button class="card-button">Booking</button>
              </div>
            </div>
            <div class="card">
              <div class="front-side">
                <img src="images/sea.jpg" alt="Sea" class="card-image" />
                <h1 class="tour-name">The island beach</h1>
                <ul class="card-list">
                  <li class="card-list-item">5 days tour</li>
                  <li class="card-list-item">Up to 40 people</li>
                  <li class="card-list-item">8 tour guides</li>
                  <li class="card-list-item">Sleep in hotel</li>
                  <li class="card-list-item">Difficulty: easy</li>
                </ul>
                <button class="navigation-button">
                  price &gt;&gt;
                </button>
              </div>
              <div class="back-side center">
                <button class="navigation-button">
                  &lt;&lt; back
                </button>
                <h3 class="tour-price">$599</h3>
                <button class="card-button">Booking</button>
              </div>
            </div>
          </div>
        </section>
        <!-- End of Popular tours -->

        <!-- Section 3 -->
        <section class="section-3">
          <h1 class="section-heading">Gallery</h1>
          <div class="gallery">
              <a href="#" class="gallery-link" title="Order Now">
                  <img src="/images/forest.jpg" class="food-img" />
                  <h3 class="food-name">Australia</h3>
                  <p class="food-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                      commodi possimus iure hic excepturi. Corporis!
                  </p>
              </a>
              <a href="#" class="gallery-link" title="Order Now">
                <img src="/images/forest.jpg" class="food-img" />
                <h3 class="food-name">Australia</h3>
                <p class="food-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                    commodi possimus iure hic excepturi. Corporis!
                </p>
              </a> 
              <a href="#" class="gallery-link" title="Order Now">
                <img src="/images/forest.jpg" class="food-img" />
                <h3 class="food-name">Australia</h3>
                <p class="food-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                    commodi possimus iure hic excepturi. Corporis!
                </p>
              </a>
            <a href="#" class="gallery-link" title="Order Now">
              <img src="/images/forest.jpg" class="food-img" />
              <h3 class="food-name">Australia</h3>
              <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                  commodi possimus iure hic excepturi. Corporis!
              </p>
            </a> 
              <a href="#" class="gallery-link" title="Order Now">
                  <img src="/images/gallery-img-2.jpg" class="food-img" />
                  <h3 class="food-name">Canada</h3>
                  <p class="food-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                      commodi possimus iure hic excepturi. Corporis!
                  </p>
              </a>
              <a href="#" class="gallery-link" title="Order Now">
                  <img src="/images/gallery-img-3.jpg" class="food-img" />
                  <h3 class="food-name">DUBAI</h3>
                  <p class="food-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                      commodi possimus iure hic excepturi. Corporis!
                  </p>
              </a>
              <a href="#" class="gallery-link" title="Order Now">
                  <img src="/images/gallery-img-4.jpg" class="food-img" />
                  <h3 class="food-name">India</h3>
                  <p class="food-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                      commodi possimus iure hic excepturi. Corporis!
                  </p>
              </a>
              <a href="#" class="gallery-link" title="Order Now">
                  <img src="/images/gallery-img-5.jpg" class="food-img" />
                  <h3 class="food-name">Paris</h3>
                  <p class="food-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                      commodi possimus iure hic excepturi. Corporis!
                  </p>
              </a>
              <a href="#" class="gallery-link" title="Order Now">
                  <img src="/images/gallery-img-6.jpg" class="food-img" />
                  <h3 class="food-name">Singapore</h3>
                  <p class="food-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                      commodi possimus iure hic excepturi. Corporis!
                  </p>
              </a>
          </div>
      </section>
      <!-- End of Section 3 -->
  
        <!-- Stories -->
        <section class="stories">
          <div class="video-container">
            <video class="bg-video" autoplay muted loop>
              <source src="images/video.mp4" type="video/mp4" />
            </video>
          </div>
          <div class="stories-wrapper">
            <div class="story-bg">
              <div class="story">
                <img
                  src="images/story-img-1.jpg"
                  alt="Customer image"
                  class="story-image"
                />
                <div class="story-text">
                  <h1 class="story-heading">
                    These were the best days of this year
                  </h1>
                  <p class="story-paragraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Architecto quas, repudiandae veritatis nam mollitia cumque
                    distinctio, quia aperiam aliquid at consequuntur libero
                    quisquam facilis laborum inventore repellat perspiciatis vel
                    fugiat molestias recusandae eum necessitatibus quo possimus
                    aspernatur? Nobis, architecto eaque.
                  </p>
                </div>
              </div>
            </div>
            <div class="story-bg">
              <div class="story">
                <img
                  src="images/story-img-2.jpg"
                  alt="Customer image"
                  class="story-image"
                />
                <div class="story-text">
                  <h1 class="story-heading">
                    I enjoyed this great tour
                  </h1>
                  <p class="story-paragraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Architecto quas, repudiandae veritatis nam mollitia cumque
                    distinctio, quia aperiam aliquid at consequuntur libero
                    quisquam facilis laborum inventore repellat perspiciatis vel
                    fugiat molestias recusandae eum necessitatibus quo possimus
                    aspernatur? Nobis, architecto eaque.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End of Stories -->
  
        <!-- Contact -->
        <section class="contact" id="contact us">
          <h1 class="contact-heading">Contact Us</h1>
          <form class="contact-form center">
            <div class="input-group">
              <label>Full Name *</label>
              <input
                type="text"
                class="contact-input"
                placeholder="Enter Your Name"
              />
            </div>
            <div class="input-groups">
              <div class="input-group">
                <label>Email *</label>
                <input
                  type="email"
                  class="contact-input"
                  placeholder="Enter Your Email"
                />
              </div>
              <div class="input-group">
                <label>Phone</label>
                <input
                  type="text"
                  class="contact-input"
                  placeholder="Enter Phone Number"
                />
              </div>
            </div>
            <div class="input-group">
              <label>Message</label>
              <textarea
                class="form-textarea"
                placeholder="Your Message Here..."
              ></textarea>
            </div>
            <input type="submit" value="Submit" class="form-btn" />
          </form>
        </section>
        <!-- End of Contact -->
  
        <!-- Footer -->
        <footer class="footer">
          <div class="footer-list">
            <a href="#" class="footer-link">Home</a>
            <a href="#" class="footer-link">Tours</a>
            <a href="aboutus/aboutus.html" class="footer-link">About Us</a>
            <a href="#" class="footer-link">Offer</a>
          </div>
          <p class="footer-paragraph">
            Copyright &copy; GROUP 5 All Rights Reserved
          </p>
        </footer>
        <!-- End of Footer -->
      </div>
      <script src="script.js"></script>
      
    
</body>
</html>