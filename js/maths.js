// function myFunction() {
//  alert("I am an alert box!");
// }
// <!-- <!DOCTYPE html>
// <html>
// <body>
// <script>
// window.alert("abc");
// </script>
// </body>
// </html> -->
helpBtn = document.querySelector(".help");
const help = () => {
	 alert("1. Start the Game.\n2. Select Operation You Want to Perform.\n3. After that System will Generate Random Question.\n4. Each Question have 4 Options among which 1 is Correct.\n5. Select a correct Ans. and you will get 1 Point.");
	}
helpBtn.addEventListener("click", help);