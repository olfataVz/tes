<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <form id="inputForm">
      <label for="number1">Number 1:</label>
      <input type="number" id="number1" name="number1" placeholder="Enter number 1..." required>

      <label for="number2">Number 2:</label>
      <input type="number" id="number2" name="number2" placeholder="Enter number 2..." required>

      <label>Operation:</label>
      <div class="operation-options">
        <div class="radio-option">
          <input type="radio" id="add" name="operation" value="add">
          <label for="add">Add</label>
        </div>

        <div class="radio-option">
          <input type="radio" id="substract" name="operation" value="substract">
          <label for="substract">Substract</label>
        </div>

        <div class="radio-option">
          <input type="radio" id="multiply" name="operation" value="multiply">
          <label for="multiply">Multiply</label>
        </div>

        <div class="radio-option">
          <input type="radio" id="divide" name="operation" value="divide">
          <label for="divide">Divide</label>
        </div>
      </div>

      <button type="button" id="calculateButton">Calculate</button>
    </form>

    <div id="output">
      <table id="outputTable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Num 1</th>
            <th>Num 2</th>
            <th>Operation</th>
            <th>Result</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
