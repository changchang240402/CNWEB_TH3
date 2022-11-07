const inputText = document.getElementById("original_format");
const outputText = document.getElementById("following_format");
window.onload = function () {
  inputText.focus();
};
inputText.addEventListener("blur", function () {
    outputText.value = changText();
});

function changText() {
  var str = inputText.value;
  var changeStr = "";
  for (const key in str) {
    if (str.hasOwnProperty.call(str, key)) {
      const element = str[key];
      var ascii = element.charCodeAt();
      var arr = ascii.toString().split(",");
      for (const items in arr) {
        if (Object.hasOwnProperty.call(arr, items)) {
          const item = arr[items];
          if (item >= 65 && item <= 90) {
            changeStr += String.fromCharCode(item).toLowerCase();
          } else {
            changeStr += String.fromCharCode(item).toUpperCase();
          }
        }
      }
    }
  }
  return changeStr;
}