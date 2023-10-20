<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="homestyle.css" />
    <script src="script.js" defer></script>
    <title>Registraion Form</title>
  </head>
  <body>
    <?php
      $questions = [
      [
          'question' => 'Favorite color',
          'answers' => ['White', 'Red', 'Blue']
      ],
      [
          'question' => 'Favorite fruit',
          'answers' => ['Apple', 'Mango', 'Banana']
      ],
      [
          'question' => 'Favorite drink',
          'answers' => ['Water', 'Soda', 'Wine']
      ]
      ];
    ?>
    <form action="#" class="form">
      <h1 class="text-center">Registration Form</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          
        ></div>
        <div class="progress-step" ></div>
        <div class="progress-step" ></div>
        <div class="progress-step"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <label for="username"><?php echo $questions[0]['question'] ?></label>
          <?php 
            foreach ($questions[0]['answers'] as $answer) {
              echo "<p onClick='handleClick(`$answer`,1)' class='btn btn--choice'>$answer</p><br>";
          }
          ?>
        </div>
        
        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
        </div>
      </div>


      <div class="form-step">
        <div class="input-group">
          <label for="username"><?php echo $questions[1]['question'] ?></label>
          <?php 
            foreach ($questions[1]['answers'] as $answer) {
              echo "<p onClick='handleClick(`$answer`,2)' class='btn btn--choice'>$answer</p><br>";
          }
          ?>
        </div>
        
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>


      <div class="form-step">
        <div class="input-group">
        <label for="username"><?php echo $questions[2]['question'] ?></label>  
        <?php 
            foreach ($questions[2]['answers'] as $answer) {
              echo "<p onClick='handleClick(`$answer`, 3)' class='btn btn--choice'>$answer</p><br>";
          }
          ?>
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>


      <div class="form-step">
        <div class="input-group">
          <label for="name">Name</label>
          <input value="" onchange="handleChange('namespan', this.value)" type="name" name="name" id="name" />
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input value="" onchange="handleChange('emailspan', this.value)" type="email" email="email" id="email" />

        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <!-- <input type="submit" value="Submit" class="btn" /> -->
        </div>
      </div>
    </form>
    <div class="info">
      <h4 >Color => <span id="1"></span></h4>
      <h4 >Fruit => <span id="2"></span></h4 >
      <h4 >Drink => <span id="3"></span></h4>
      <h4>Name => <span id="namespan"></span></h4>
      <h4>Email => <span id="emailspan"></span></h4>

          
    </div>
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