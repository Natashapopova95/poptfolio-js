<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" media="screen" href="styles/styles.css" />
  <link rel="stylesheet" media="screen" href="styles/main.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <title>Web development</title>
</head>

<body>
  <header class="header">
    <div class="wrapper">
      <a href="#" class="logo">
        <svg width="85" height="40" viewBox="0 0 85 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M52.1089 40V0H65.8461C70.0901 0 73.6268 0.901408 76.4561 2.70422C79.3227 4.46948 81.4633 6.87324 82.878 9.91549C84.2927 12.9202 85 16.2629 85 19.9437C85 24 84.2182 27.5305 82.6546 30.5352C81.091 33.5399 78.876 35.8685 76.0094 37.5211C73.1428 39.1737 69.755 40 65.8461 40H52.1089ZM79.9183 19.9437C79.9183 16.939 79.3599 14.2723 78.2431 11.9437C77.1635 9.61503 75.5813 7.79343 73.4965 6.47887C71.4117 5.16432 68.8616 4.50704 65.8461 4.50704H57.1347V35.493H65.8461C68.8988 35.493 71.4675 34.8169 73.5523 33.4648C75.6371 32.0751 77.2193 30.216 78.2989 27.8873C79.3785 25.5211 79.9183 22.8732 79.9183 19.9437Z"
            fill="url(#paint0_radial_1506_4834)" />
          <path
            d="M18.763 0.225353H23.5096L28.7588 14.1408L34.0638 0.225353H38.8104L31.9418 17.6338L38.7546 34.1408L52.1567 0H57.6293L41.0441 40H36.6884L28.8146 21.1268L20.885 40H16.5293L0 0H5.41671L18.8747 34.1408L25.6316 17.6338L18.763 0.225353Z"
            fill="url(#paint1_radial_1506_4834)" />
          <defs>
            <radialGradient id="paint0_radial_1506_4834" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
              gradientTransform="translate(85 -12.6583) rotate(150.001) scale(105.319 851.48)">
              <stop stop-color="#00C9FC" />
              <stop offset="0.563587" stop-color="#1A46EF" />
            </radialGradient>
            <radialGradient id="paint1_radial_1506_4834" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
              gradientTransform="translate(85 -12.6583) rotate(150.001) scale(105.319 851.48)">
              <stop stop-color="#00C9FC" />
              <stop offset="0.563587" stop-color="#1A46EF" />
            </radialGradient>
          </defs>
        </svg>
      </a>

      <nav class="menu">
        <ul class="menu-list">
          <li class="menu-list__item">
            <a href="#about" class="menu-list__link">Обо мне</a>
          </li>
          <li class="menu-list__item">
            <a href="#skills" class="menu-list__link">Навыки</a>
          </li>
          <li class="menu-list__item">
            <a href="#portfolio" class="menu-list__link">Портфолио</a>
          </li>
          <li class="menu-list__item">
            <a href="#feedback" class="menu-list__link">Связаться со мной</a>
          </li>
        </ul>
      </nav>
      <div class="header-menu__burger">
        <span></span>
      </div>
    </div>
  </header>

  <main class="main">
    <section class="info">
      <div class="info__container">
        <h1 class="info__title">Web development</h1>
        <div class="info__text">
          <p class="text">Вы работаете над чем-то великим?</p>
          <p class="text">
            Я с удовольствием помогу вам в этом! Напишите мне письмо и мы
            начнем проект прямо сейчас!
          </p>
        </div>
        <a href="#feedback" class="info__link">Связаться с разработчиком</a>
      </div>
      <a href="#about" class="info__link-icons">
        <svg width="57" height="76" viewBox="0 0 57 76" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M30.8213 67.835C29.8551 69.48 27.4763 69.4793 26.5099 67.8338L11.9846 43.1018C11.0056 41.4349 12.2072 39.3358 14.14 39.3363L43.1865 39.3443C45.1193 39.3449 46.3212 41.4447 45.3425 43.111L30.8213 67.835Z"
            fill="#08A6CE" style="mix-blend-mode: saturation" />
          <path
            d="M30.8213 67.835C29.8551 69.48 27.4763 69.4793 26.5099 67.8338L11.9846 43.1018C11.0056 41.4349 12.2072 39.3358 14.14 39.3363L43.1865 39.3443C45.1193 39.3449 46.3212 41.4447 45.3425 43.111L30.8213 67.835Z"
            stroke="#08A6CE" stroke-width="3" />
          <path
            d="M29.8808 48.0399C29.2906 49.0209 27.8634 49.0058 27.2941 48.0126L10.4209 18.5765C9.84421 17.5704 10.5785 16.3184 11.7381 16.3306L46.1021 16.6934C47.2617 16.7056 47.9694 17.9729 47.3716 18.9666L29.8808 48.0399Z"
            fill="#1222B0" style="mix-blend-mode: exclusion" />
          <path
            d="M29.8808 48.0399C29.2906 49.0209 27.8634 49.0058 27.2941 48.0126L10.4209 18.5765C9.84421 17.5704 10.5785 16.3184 11.7381 16.3306L46.1021 16.6934C47.2617 16.7056 47.9694 17.9729 47.3716 18.9666L29.8808 48.0399Z"
            stroke="#1222B0" stroke-width="5" />
        </svg>
      </a>
    </section>
    <section class="about" id="about">
      <div class="inner">
        <h1 class="about__title">Обо мне</h1>
        <span class="about__line line"></span>
      </div>
      <div class="container">
        <div class="about__wrapper">
          <img src="/images/photo.jpg" alt="photo" class="about__img" />
          <div class="about__info">
            <div class="about__info-name">
              <h3 class="about__info-subtitle">Иван Иванов</h3>
              <span class="about__info-line line"></span>
            </div>
            <p class="about__info-text">
              Расположенный в Хартфорде, штат Коннектикут. В настоящее время я
              работаю по совместительству Удаленным младшим веб-разработчиком
              для Coolor, расположенного в Лас-Вегасе. Я ищу, чтобы взять на
              себя больше работы и повысить свои навыки в качестве
              веб-разработчика.
            </p>
            <ul class="social">
              <li class="social__item">
                <a href="#" class="social__link">
                  <span class="social__text"> facebook </span>
                  <span class="social__img">
                    <img src="/images/facebook.svg" alt="" class="social__icons" />
                  </span>
                </a>
              </li>
              <li class="social__item">
                <a href="#" class="social__link">
                  <span class="social__text"> ВКонтакте </span>
                  <span class="social__img">
                    <img src="/images/vk.svg" alt="" class="social__icons" />
                  </span>
                </a>
              </li>
              <li class="social__item">
                <a href="#" class="social__link">
                  <span class="social__text"> youtube </span>
                  <span class="social__img">
                    <img src="/images/youtube.svg" alt="" class="social__icons" />
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="skills" id="skills">
      <div class="inner">
        <h1 class="about__title">НАВЫКИ</h1>
        <span class="about__line line"></span>
      </div>
      <div class="container">
        <div class="skills__wrapper">
          <div class="skills__inner">
            <div class="skills__box">
              <div class="skills__inner-title">
                <img src="/images/icon1.svg" alt="" class="slills__icons" />
                <h3 class="skills__title">Веб-Разработка</h3>
              </div>
              <span class="about__line line"></span>
            </div>
            <p class="skills__text">
              Javascript, Coffeescript, JAVA, Python, PHP, Go, Node.js,
              MongoDB, Redis, PostgreSQL, WebStorm.
            </p>
          </div>
          <div class="skills__inner">
            <div class="skills__box">
              <div class="skills__inner-title">
                <img src="/images/icon web (1).svg" alt="" class="slills__icons" />
                <h3 class="skills__title">Разработка Frontend</h3>
              </div>
              <span class="about__line line"></span>
            </div>
            <p class="skills__text">
              HTML, CSS, LESS, SASS, Bootstrap, Wordpress, Drupal, Phonegap /
              Cordova, Ionic, Foundation, Angular.js.
            </p>
          </div>
          <div class="skills__inner">
            <div class="skills__box">
              <div class="skills__inner-title">
                <img src="/images/icon3.svg" alt="" class="slills__icons" />
                <h3 class="skills__title">UI/UX Дизайн</h3>
              </div>
              <span class="about__line line"></span>
            </div>
            <p class="skills__text">
              Photoshop, Illustrator, Sketch, Axure, XMind, Прототипирование,
              Wireframing, Исследование Пользователей, Юзабилити-Тестирование
            </p>
          </div>
          <div class="skills__inner">
            <div class="skills__box">
              <div class="skills__inner-title">
                <img src="/images/icon web (2).svg" alt="" class="slills__icons" />
                <h3 class="skills__title">Консалтинг и SEO-Аудит</h3>
              </div>
              <span class="about__line line"></span>
            </div>
            <p class="skills__text">
              Screaming Frog, Woorank, Raventools, Semrush, Moz, WebCEO,
              Google Analytics, ChartBeat, CrazyEgg.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="portfolio" id="portfolio">
      <div class="inner">
        <h1 class="about__title">ПОРТФОЛИО</h1>
        <span class="about__line line"></span>
      </div>
      <div class="container">
        <div class="portfolio__wrapper">
          <a href="https://shop-chi-one.vercel.app/" class="portfolio__container">
            <img src="/images/2023-07-27_17-00-45.png" alt="" class="portfolio__img" />
            <p class="portfolio__text">Сайт мебели</p>
          </a>

          <a href="http://yanaeva68.ru" class="portfolio__container">
            <img src="/images/2023-07-27_17-01-29.png" alt="" class="portfolio__img" />
            <p class="portfolio__text">сайт автомобильных ковриков</p>
          </a>
          <a href="https://shop-chi-one.vercel.app/" class="portfolio__container">
            <img src="/images/2023-07-27_17-00-45.png" alt="" class="portfolio__img" />
            <p class="portfolio__text">Сайт мебели</p>
          </a>
          <a href="http://yanaeva68.ru" class="portfolio__container">
            <img src="/images/2023-07-27_17-01-29.png" alt="" class="portfolio__img" />
            <p class="portfolio__text">сайт автомобильных ковриков</p>
          </a>
          <a href="https://shop-chi-one.vercel.app/" class="portfolio__container">
            <img src="/images/2023-07-27_17-00-45.png" alt="" class="portfolio__img" />
            <p class="portfolio__text">Сайт мебели</p>
          </a>
          <a href="http://yanaeva68.ru" class="portfolio__container">
            <img src="/images/2023-07-27_17-01-29.png" alt="" class="portfolio__img" />
            <p class="portfolio__text">сайт автомобильных ковриков</p>
          </a>
        </div>
      </div>
    </section>
    <section class="feedback" id="feedback">
      <div class="inner">
        <h1 class="about__title">ОБРАТНАЯ СВЯЗЬ</h1>
        <span class="about__line line"></span>
      </div>
      <div class="container">
        <div class="feedback__wrapper">
          <div class="feedback__info">
            <p class="feedback__text">Вы работаете над чем-то великим?</p>
            <p class="feedback__text">
              Я с удовольствием помогу вам в этом! Напишите мне письмо и мы
              начнем проект прямо сейчас! Просто сделай это!
            </p>
            <div class="feedback__inner">
              <h3 class="feedback__title">
                Я в соцсетях:
                <span class="about__line line"></span>
              </h3>
              <ul class="feedback__social">
                <li class="social__item">
                  <a href="#" class="social__link">
                    <span class="social__text">facebook</span>
                    <span class="social__img">
                      <img src="/images/facebook.svg" alt="" class="social__icons" />
                    </span>
                  </a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link">
                    <span class="social__text"> ВКонтакте </span>
                    <span class="social__img">
                      <img src="/images/vk.svg" alt="" class="social__icons" />
                    </span>
                  </a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link">
                    <span class="social__text">youtube</span>
                    <span class="social__img">
                      <img src="/images/youtube.svg" alt="" class="social__icons" />
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <form action="index.php" method="post" id="forms" target="_blank" class="form">
            <div class="form__item">
              <label for="formName" class="form__ladel">Ф.И.О.*</label>
              <input required type="text" id="formName" class="form__input" name="username"
                placeholder="Укажите ваши Ф.И.О." />
            </div>
            <div class="form__item">
              <label for="formPhone" class="form__ladel">Телефон*</label>
              <input required type="tel" id="formPhone" class="form__input" name="message"
                placeholder="Укажите ваш телефон" />
            </div>
            <div class="form__item">
              <label for="formEmail" class="form__ladel">E-mail*</label>
              <input required type="email" id="formEmail" class="form__input" name="email"
                placeholder="Укажите ваши E-mail" />
            </div>
            <input type="submit" class="link" value="Отправить заявку"></input>
          </form>

          <?php 
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


if (trim($name) == "") 
  echo "Вы не ввели имя пользователя";
else if(strlen(trim($name)) <= 1)
  echo "Такого имени не существует";
else if(trim($email) == "" || trim($password) == "" || "" || trim($_POST["message"]) == "")
  echo "Введите все двнные";
else {
  $_POST['password'] = md5($password);
  echo "<h1>Все данные</h1>";
  foreach ($_POST as $key => $value) 
    echo "<p>$value</p>";
}


if (mail("nat4shail@yandex.ru", "Заказ с сайта", "ФИО:".$name.". E-mail: ".$email))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>
        </div>
      </div>
    </section>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>
