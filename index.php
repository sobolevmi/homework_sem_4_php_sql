<?php
$myinfo = [
	'Name' => 'Максим',
	'Job' => 'Attorney at law',
    'City' => 'Saint Petersburg',
    'Email' => 'sobmig@gmail.com',
    'Tel' => '+7-921-892-18-61',
    'DateBirth' => '18.03.1993 (29 лет)'
];

$experience1 = [
	'Title' => 'Адвокат',
    'DateStart' => 'Aug 2019',
    'DateEnd' => 'Current',
    'Text' => 'Адвокат Санкт-Петербургской коллегии адвокатов "Налоги, экономика, бизнес", специализирующийся на защите доверителей по уголовным делам и представляющий интересы физических и юридических лиц в ходе проведения проверок налоговым органом'
];

$experience2 = [
	'Title' => 'Следователь',
    'DateStart' => 'Nov 2016',
    'DateEnd' => 'Jan 2019',
    'Text' => 'Следователь и старший следователь по уголовным делам против государственной власти и в сфере экономики Главного следственного управления СК России по Санкт-Петербургу'
];

$experience3 = [
	'Title' => 'Юрисконсульт',
    'DateStart' => 'June 2011',
    'DateEnd' => 'June 2012',
    'Text' => 'Юрисконсульт ООО "Аудит-Профит", осуществляющий консультирование сотрудников организации по юридическим вопросам и судебное представительство интересов'
];

$education = [
	'Title' => 'Российский государственный университет правосудия',
    'DateStart' => '2010',
    'DateEnd' => '2015',
    'Faculty' => 'Факультет подготовки специалистов для судебной системы (юридический)',
    'Speciality' => 'Специальность: юриспруденция'
];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?= $myinfo['Name']; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $myinfo['Job']; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $myinfo['City']; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $myinfo['Email']; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $myinfo['Tel']; ?></p>
          <p><i class="fa fa-hourglass fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $myinfo['DateBirth']; ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <p>Уголовный процесс</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">100%</div>
          </div>
          <p>Налоговое законодательство</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">100%</div>
            </div>
          </div>
          <p>Арбитражный процесс</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">50%</div>
          </div>
          <p>Гражданский процесс</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">10%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Иностранные языки</b></p>
          <p>Русский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Французский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $experience1['Title']; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $experience1['DateStart']; ?> - <span class="w3-tag w3-teal w3-round"><?= $experience1['DateEnd']; ?></span></h6>
          <p><?= $experience1['Text']; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $experience2['Title']; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $experience2['DateStart']; ?> - <?= $experience2['DateEnd']; ?></h6>
          <p><?= $experience2['Text']; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $experience3['Title']; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $experience3['DateStart']; ?> - <?= $experience3['DateEnd']; ?></h6>
          <p><?= $experience3['Text']; ?></p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $education['Text']; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $education['DateStart']; ?> - <?= $education['DateEnd']; ?></h6>
          <p><?= $education['Faculty']; ?></p>
          <p><?= $education['Speciality']; ?></p>
          <hr>
        </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>