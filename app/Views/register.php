<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Codeigniter Auth User Registration Example</title>
    <style >
    @import url("https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;500;600;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Commissioner:wght@200;300;400;500;600&display=swap");

$primary: #233d4d;
$secondary: #fe7f2d;
$white: #fdfffc;

* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-size: 18px;
}

@mixin title-style() {
font-family: "Readex Pro", sans-serif;
font-weight: bold;
text-transform: uppercase;
font-size: clamp(32px, 4vw, 46px);
}

@mixin from-transition($transX, $opacity) {
transform: $transX;
opacity: $opacity;
}

main {
background-color: $primary;
width: 100vw;
height: 100vh;
position: relative;

font-family: "Commissioner", sans-serif;

.slide-one {
  width: 80%;
  color: white;
  display: flex;
  height: 100%;
  transition: 1s;

  &.slide-move {
    transform: translateX(25%);
  }
  .message {
    flex: auto;
    display: flex;

    align-content: center;
    flex-direction: column;

    align-items: center;
    justify-content: center;
    padding: 0 4rem;
    transition: transform 0.5s, opacity 0.8s;

    .message-caption {
      height: 255px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 2rem;
      text-align: center;
    }

    .btn-enter {
      width: clamp(1rem, 80%, 300px);
      height: clamp(2rem, 8vh, 80px);
      font-size: 1.2rem;
      background: #fe7f2d;
      color: white;
      font-weight: 600;
      border: 1px solid transparent;
      border-radius: 50px;
      transition: 0.3s;

      &:hover {
        cursor: pointer;
        transform: scale(1.1);
        box-shadow: 4px 4px 20px #fe7f2d8c;
      }
    }

    h1 {
      @include title-style();
    }

    p {
      line-height: 2rem;
    }
  }
}
.slide-two {
  position: absolute;
  background: $white;
  top: 0;
  right: 0;
  bottom: 0;

  width: 60%;
  overflow: hidden;
  transition: right 0.8s ease-out;

  &.slide-move {
    right: 40%;
  }

  .form-container {
    position: relative;
    width: 100%;
    height: 100%;
  }

  .form-wrapper {
    position: absolute;
    inset: 6vh 10vw;
    margin: auto;

    .header {
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      align-items: center;
      height: 200px;

      h1 {
        @include title-style();
        color: $secondary;
      }

      nav {
        display: flex;
        justify-content: center;
        width: 100%;
        gap: 8px;

        .menu-item {
          width: 2.2rem;
          height: 2.2rem;
          border-radius: 50%;
          display: flex;
          justify-content: center;
          align-items: center;

          svg {
            fill: $primary;
          }

          &:hover > svg {
            fill: $secondary;
          }
        }
      }
    }
    .input-group {
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: repeat(3, 1fr) 12vh;
      gap: 12px;

      .input {
        display: grid;
        align-content: end;

        &.forget-password-input {
          place-items: center;
        }

        & > .forget-link {
          text-decoration: none;
          color: $primary;
          font-size: 1.2rem;
          font-weight: 700;
        }

        label {
          color: darkgray;
        }

        input {
          outline: none;
          border: 1px solid transparent;
          border-bottom: 1px solid darkgray;
          height: 3rem;
          font-family: "Readex Pro", sans-serif;
          font-size: 1rem;
        }
      }
      .button-input {
        place-items: center;

        & > button {
          width: clamp(1rem, 80%, 300px);
          height: clamp(2rem, 8vh, 80px);
          font-size: 1.2rem;
          background: #fe7f2d;
          color: white;
          font-weight: 600;
          border: 1px solid transparent;
          border-radius: 50px;
          transition: 0.3s;

          &:hover {
            cursor: pointer;
            transform: scale(1.1);
            box-shadow: 4px 4px 20px #fe7f2d8c;
          }
        }
      }
    }
  }

  .form-wrapper-one,
  .form-wrapper-two {
    transition: transform 0.8s, opacity 1.4s;
  }
  .form-wrapper-one {
    &.form-wrapper-hidden {
      @include from-transition(translateX(200vw), 0);
    }
  }

  .form-wrapper-two {
    &.form-wrapper-hidden {
      @include from-transition(translateX(-200vw), 0);
    }
  }
}
}

    </style>
    </head>
    <body>
      <!-- <main> -->


      <!-- section pertama -->
      <section class="slide slide-one">
        <div class="message message-one">
          <div class="message-caption">
            <h1>Welcome back</h1>
            <p>To keep connected with us please with your personal info</p>
          </div>

          <button class="btn-enter">Sign in</button>
        </div>
        <div class="message message-two">
          <div class="message-caption">
            <h1>Hello</h1>
            <p>Enter your personal details and start journey with us</p>
          </div>

          <button class="btn-enter">Sign up</button>
        </div>
      </section>

      <!-- section kedua -->
      <section class="form-page slide slide-two">
        <div class="form-container">
          <div class="form-wrapper form-wrapper-one">
            <section class="header">
              <h1>create account</h1>
              <nav>
                <a href="#" class="menu-item">
                  <!-- svg from fontawesome -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                      d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                    /></svg
                ></a>
                <a href="#" class="menu-item"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 488 512"
                  >
                    <path
                      d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
                    /></svg
                ></a>
                <a href="#" class="menu-item"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path
                      d="M201.5 305.5c-13.8 0-24.9-11.1-24.9-24.6 0-13.8 11.1-24.9 24.9-24.9 13.6 0 24.6 11.1 24.6 24.9 0 13.6-11.1 24.6-24.6 24.6zM504 256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-132.3-41.2c-9.4 0-17.7 3.9-23.8 10-22.4-15.5-52.6-25.5-86.1-26.6l17.4-78.3 55.4 12.5c0 13.6 11.1 24.6 24.6 24.6 13.8 0 24.9-11.3 24.9-24.9s-11.1-24.9-24.9-24.9c-9.7 0-18 5.8-22.1 13.8l-61.2-13.6c-3-.8-6.1 1.4-6.9 4.4l-19.1 86.4c-33.2 1.4-63.1 11.3-85.5 26.8-6.1-6.4-14.7-10.2-24.1-10.2-34.9 0-46.3 46.9-14.4 62.8-1.1 5-1.7 10.2-1.7 15.5 0 52.6 59.2 95.2 132 95.2 73.1 0 132.3-42.6 132.3-95.2 0-5.3-.6-10.8-1.9-15.8 31.3-16 19.8-62.5-14.9-62.5zM302.8 331c-18.2 18.2-76.1 17.9-93.6 0-2.2-2.2-6.1-2.2-8.3 0-2.5 2.5-2.5 6.4 0 8.6 22.8 22.8 87.3 22.8 110.2 0 2.5-2.2 2.5-6.1 0-8.6-2.2-2.2-6.1-2.2-8.3 0zm7.7-75c-13.6 0-24.6 11.1-24.6 24.9 0 13.6 11.1 24.6 24.6 24.6 13.8 0 24.9-11.1 24.9-24.6 0-13.8-11-24.9-24.9-24.9z"
                    /></svg
                ></a>
              </nav>
              <p>or use your email for registration</p>
            </section>

            <form class="input-group" action="">
              <div class="name-input input">
                <label>Name</label>
                <input type="text" />
              </div>
              <div class="email-input input">
                <label>Email</label>
                <input type="email" />
              </div>

              <div class="password-input input">
                <label>Password</label>
                <input type="password" />
              </div>
              <div class="button-input input">
                <button>Sign up</button>
              </div>
            </form>
          </div>
          <div class="form-wrapper form-wrapper-two form-wrapper-hidden">
            <section class="header">
              <h1>Sign in to App</h1>
              <nav>
                <a href="#" class="menu-item">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                      d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                    /></svg
                ></a>
                <a href="#" class="menu-item"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 488 512"
                  >
                    <path
                      d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
                    /></svg
                ></a>
                <a href="#" class="menu-item"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path
                      d="M201.5 305.5c-13.8 0-24.9-11.1-24.9-24.6 0-13.8 11.1-24.9 24.9-24.9 13.6 0 24.6 11.1 24.6 24.9 0 13.6-11.1 24.6-24.6 24.6zM504 256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-132.3-41.2c-9.4 0-17.7 3.9-23.8 10-22.4-15.5-52.6-25.5-86.1-26.6l17.4-78.3 55.4 12.5c0 13.6 11.1 24.6 24.6 24.6 13.8 0 24.9-11.3 24.9-24.9s-11.1-24.9-24.9-24.9c-9.7 0-18 5.8-22.1 13.8l-61.2-13.6c-3-.8-6.1 1.4-6.9 4.4l-19.1 86.4c-33.2 1.4-63.1 11.3-85.5 26.8-6.1-6.4-14.7-10.2-24.1-10.2-34.9 0-46.3 46.9-14.4 62.8-1.1 5-1.7 10.2-1.7 15.5 0 52.6 59.2 95.2 132 95.2 73.1 0 132.3-42.6 132.3-95.2 0-5.3-.6-10.8-1.9-15.8 31.3-16 19.8-62.5-14.9-62.5zM302.8 331c-18.2 18.2-76.1 17.9-93.6 0-2.2-2.2-6.1-2.2-8.3 0-2.5 2.5-2.5 6.4 0 8.6 22.8 22.8 87.3 22.8 110.2 0 2.5-2.2 2.5-6.1 0-8.6-2.2-2.2-6.1-2.2-8.3 0zm7.7-75c-13.6 0-24.6 11.1-24.6 24.9 0 13.6 11.1 24.6 24.6 24.6 13.8 0 24.9-11.1 24.9-24.6 0-13.8-11-24.9-24.9-24.9z"
                    /></svg
                ></a>
              </nav>
              <p>or use your email account</p>
            </section>

            <form class="input-group" action="">
              <div class="email-input input">
                <label>Email</label>
                <input type="email" />
              </div>

              <div class="password-input input">
                <label>Password</label>
                <input type="password" />
              </div>
              <div class="forget-password-input input">
                <a href="" class="forget-link">forgot your password ?</a>
              </div>
              <div class="button-input input">
                <button>Sign in</button>
              </div>
            </form>
          </div>
        </div>
      </section>
      <script>
      const buttonEnter = document.querySelectorAll('.btn-enter')
const formPage = document.querySelector(".form-page")
const formWrapperOne = document.querySelector(".form-wrapper-one")
const formWrapperTwo = document.querySelector(".form-wrapper-two")
const slideMessage = document.querySelector(".slide-one")

function handleButtonEnter() {
  if (formPage.classList.contains("slide-move")) {
      formPage.classList.remove("slide-move");
      formWrapperOne.classList.remove("form-wrapper-hidden")
      formWrapperTwo.classList.add('form-wrapper-hidden')
      slideMessage.classList.remove('slide-move')
  } else {
      formPage.classList.add('slide-move')
      formWrapperOne.classList.add('form-wrapper-hidden')
      formWrapperTwo.classList.remove("form-wrapper-hidden")
      slideMessage.classList.add('slide-move')

  }

}

buttonEnter.forEach(button => {
  button.addEventListener('click', handleButtonEnter)
})


      </script>
      <!-- </main> -->
  </body>



  </html>
