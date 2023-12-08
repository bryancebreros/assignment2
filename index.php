<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="homestyle.css" />
    <script src="script.js" defer></script>
    <title>Registration Form</title>
  </head>
  <body>
    <?php
      $questions = [
        [
            'question' => 'Favorite color',
            'answers' => ['White', 'Red', 'Blue'],
        ],
        [
            'question' => 'Favorite fruit',
            'answers' => ['Apple', 'Mango', 'Banana'],
        ],
        [
            'question' => 'Favorite drink',
            'answers' => ['Water', 'Soda', 'Wine'],
        ]
        ];
        
    ?>
    <div class="info">
      <h4 >Color => <span id="1"></span></h4>
      <h4 >Fruit => <span id="2"></span></h4 >
      <h4 >Drink => <span id="3"></span></h4>
      <h4>Name => <span id="namespan"></span></h4>
      <h4>Email => <span id="emailspan"></span></h4>

          
    </div>

    <form action="#" class="form">
      <h1 class="text-center">Registration Form</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          
        >
        
      </div>
        <div class="progress-step" ></div>
        <div class="progress-step" ></div>
        <div class="progress-step"></div>
      </div>

      <!-- Steps -->
      <?php for ($i = 0; $i < 4; $i++): ?>
        <div class="form-step <?= $i == 0 ? 'form-step-active' : '' ?>">
        <?php if($i == 3): ?>
          <div class="input-group">
            <label for="name">Name</label>
            <input value="" onchange="handleChange('namespan', this.value)" type="name" name="name" id="name" />
          </div>
          <div class="input-group">
            <label for="email">Email</label>
            <input value="" onchange="handleChange('emailspan', this.value)" type="email" email="email" id="email" />
          </div>
        <?php else: ?>
          <div class="input-group">  
            <label for="username"><?= $questions[$i]['question'] ?></label>
            <?php foreach ($questions[$i]['answers'] as $answer): ?>
              <p onClick="handleClick('<?= $answer ?>',<?= $i+1 ?>)" class="btn btn--choice"><?= $answer ?></p><br>
            <?php endforeach; ?>
          </div>
        <?php endif ?>
        
        <div class="<?= $i === 0 ? '' : 'btns-group' ?>">
          <?= $i === 0 ? '' : '<a href="#" class="btn btn-prev">Previous</a>' ?>
          <?= $i === 3 ? '' : '<a href="#" class="btn btn-next">Next</a></div>' ?>
        </div>
      <?php endfor; ?>      
    </form>
    
    <script>
      const handleClick = (answer, number) => {
        console.log(answer);
        console.log(number);
        localStorage.setItem(number, answer)
        document.getElementById(number).innerHTML = localStorage.getItem(number)
      }

      const handleChange = (type, value) => {
        localStorage.setItem(type, value)
        document.getElementById(type).innerHTML = localStorage.getItem(type)

      }
    </script>
  </body>
</html>