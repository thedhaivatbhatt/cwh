let $ = id => document.getElementById(id);
let _ = name => document.getElementsByName(name);
//return length of the variable's value (means no of character/digits)
let getLength = (number) => String(number).length
let int = (number) => parseInt(number);
let float = (number) => parseFloat(number);
let log = (message) => console.log(message)
let error = (error_message) => console.error(error_message)
let clone = function(object_variable)
{
    let empty_object = {};
    for(let key in object_variable)
    {
        empty_object[key] = object_variable[key];
    }
    return empty_object;
}
//we will use this function to create/change cookies value/delete cookies
//if cookies does not exists, it will create cookies with given name and values 
//if cookies exists, it will update cookies of name with given values 
function setCookie(name,value,days) {
    var d = new Date();
    d.setTime(d.getTime() + (days*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
  }
//to get existing cookies value
function getCookie(name) {
    var name = name + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var CookiesList = decodedCookie.split(';'); //return an array which has all cookies. each cookie is stored as value element 
    for(var i = 0; i <CookiesList.length; i++) {
      var SingleCookie = CookiesList[i];
      while (SingleCookie.charAt(0) == ' ') {
        SingleCookie = SingleCookie.substring(1);
      }
      if (SingleCookie.indexOf(name) == 0) {
        return SingleCookie.substring(name.length,SingleCookie.length);
      }
    }
    return "";
  }