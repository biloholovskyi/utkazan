<?php
/*
Template Name: Contacts
*/
?>
<?php get_header('white'); ?>
<div class="contacts-wrap">
      <section class="contacts">
        <div class="m-container">
          <div class="m-row">
            <div class="m-col m-col--15">
              <div class="contacts-title">
                <h1>Контактная информация</h1>
              </div>
            </div>
          </div>
          <div class="m-row content-row">
            <div class="m-col m-col--4 m-col-sm--5 m-col-xs--10">
              <div class="contacts-content">
                <div class="contacts-item">
                  <h3>Адрес:</h3>
                  <p><?php the_field('addres') ?></p>
                </div>
              </div>
            </div>
            <div class="m-col m-col--3 m-col-sm--5 m-col-xs--10"> 
              <div class="contacts-content">
                <div class="contacts-item">
                  <h3>Телефон/факс: </h3>
                  <p><?php the_field('tel') ?></p>
                </div>
              </div>
            </div>
            <div class="m-col m-col--3 m-col-sm--5 m-col-xs--10">
              <div class="contacts-content">
                <div class="contacts-item">
                  <h3> Email:</h3><a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="maps">   
        <div class="m-container">   
          <div class="m-row">
            <div class="m-col m-col--10">
              <div class="contacts-map">
                <script src="https://api-maps.yandex.ru/2.1/?apikey=&lt;ваш API-ключ&gt;&amp;lang=ru_RU" type="text/javascript"></script>
                <div class="contact-page__map" id="map"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <?php get_footer('contact'); ?>