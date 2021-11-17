<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Palindrome</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function checkPalindrome(str) {
            len = str.length;
            for (let i = 0; i < len / 2; i++) {
                if (str[i] !== str[len - 1 - i]) {
                    return "It is not a palindrome";
                }
            }
            return "It is a palindrome";
        }
        function printPalindrome() {
            inputt = document.getElementById("input").value;
            // console.log(inputt);
            document.getElementById("hasil").innerHTML = checkPalindrome(inputt);
        }
    </script>
</head>

<body>
    <h1>Palindrome Checker</h1>
    <input type="text" id="input">
    <button type="submit" id="submit" onclick="printPalindrome();">submit</button>
    <p id="hasil"></p>
</body>
</html>
