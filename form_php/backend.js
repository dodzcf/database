const person = {};

const user_data = Object.create(person);


function test() {


    user_name = document.getElementById('name').value;
    if (user_name == "") {
      alert("Please Enter Name")
      return;
    }
    if (user_name.length < 2 ) {
      alert("Please Enter More than 2 Characters");
      return;
    }

    if (user_name.length > 25 ) {
      alert("Please Enter Less than 25 Characters");
      return;
    }
    else {
      user_data.name = user_name;
      name_check = true;
      show_email();
    }
    return;
  
  }

  function show_email() {
    x = 0;
  
    var4 = document.getElementById('email').value;
  
    email_check = false;
  
    j = "nu.edu.pk";
  
    for (i = 0; i < var4.length; i++) {
      if (var4[i] == '@') {
        break;
      }
  
      if (i == var4.length - 1) {
        alert("Please Enter correct email");
        // document.getElementById("errore").innerHTML = stre;
  
        return;
      }
    }
  /*   for email of NU */

  if (var4 == "") {
    alert("Please Enter Email")
    return;
  }
  else {
    for (i = 0; i < var4.length; i++) {

      if (var4[i] == '@') {

        for (k = 0; k < j.length; k++ , i++) {
          if (var4[i + 1] == j[k]) {
            x = x + 1;
            continue;
          }
          else {
            alert("Please Enter NU Email")

            return;
          }
        }
        email_check = true;
        break;
      }
    }
    if (x == 9)
    {
      user_data.email = var4;
    }
  }

  show_password();

}


function show_password() {

  /* check Password */
  var3 = document.getElementById('passwords').value;
  score = 0
  password_check = false;




  if (var3 == "") {
    alert("Please Enter Password")
    return;
  }


  if (var3.length < 12) {
    alert("Please Enter More than 12 Characters");
    
    return;
  }


  for (i = 0; i < var3.length; i++) {

    if (var3[i] == '1' || var3[i] == '2' || var3[i] == '3' || var3[i] == '4' || var3[i] == '5' || var3[i] == '6' || var3[i] == '7' || var3[i] == '8' || var3[i] == '9' || var3[i] == '0') {
      score = score + 1;
      break;
    }
  }
  for (i = 0; i < var3.length; i++) {

    if (var3[i] == 'a' || var3[i] == 'e' || var3[i] == 'r' || var3[i] == 't' || var3[i] == 't' || var3[i] == 'y' || var3[i] == 'u' || var3[i] == 'i' || var3[i] == 'o' || var3[i] == 'p' || var3[i] == 'q' || var3[i] == 'l' || var3[i] == 'k' || var3[i] == 'j' || var3[i] == 'h' || var3[i] == 'g' || var3[i] == 'f' || var3[i] == 'd' || var3[i] == 's' || var3[i] == 'm' || var3[i] == 'n' || var3[i] == 'b' || var3[i] == 'v' || var3[i] == 'c' || var3[i] == 'x' || var3[i] == 'z' || var3[i] == 'w' || var3[i] == 'q') {
      score = score + 1;
      break;
    }
  }
  for (i = 0; i < var3.length; i++) {

    if (var3[i] == 'A' || var3[i] == 'D' || var3[i] == 'S' || var3[i] == 'F' || var3[i] == 'G' || var3[i] == 'H' || var3[i] == 'J' || var3[i] == 'K' || var3[i] == 'L' || var3[i] == 'M' || var3[i] == 'N' || var3[i] == 'B' || var3[i] == 'V' || var3[i] == 'C' || var3[i] == 'X' || var3[i] == 'Z' || var3[i] == 'Q' || var3[i] == 'W' || var3[i] == 'E' || var3[i] == 'R' || var3[i] == 'T' || var3[i] == 'Y' || var3[i] == 'U' || var3[i] == 'I' || var3[i] == 'O' || var3[i] == 'P') {
      score = score + 1;
      break;
    }

  }

  for (i = 0; i < var3.length; i++) {
    if (var3[i] == '!' || var3[i] == '@' || var3[i] == '#' || var3[i] == '$' || var3[i] == '%' || var3[i] == '^' || var3[i] == '&' || var3[i] == '*' || var3[i] == '-' || var3[i] == '_' || var3[i] == '=' || var3[i] == '+' || var3[i] == '/') {
      score = score + 1;
      break;
    }
  }

  if (score != 4) {
    alert("Please Enter An Upper case, smaller case, a number and a special character");
    return;
  }
  else {
    user_data.password = var3;
    password_check = true;
    show_gender();
  }
}


function show_gender() {
  // for Gender
  if (document.getElementById("m").checked == true || document.getElementById("fm").checked == true) {
    console.log("yes");
  }
  else {
    alert("Please Choose your Gender");
    return;
  }

  if (document.getElementById('fm').checked == true) {
    gender = document.getElementById('fm').value;
    user_data.gender = gender;
    // alert(gender);
    semesterr();
  }
  else if (document.getElementById('m').checked == true) {
    gender_check = true;
    gender = document.getElementById('m').value;
    semesterr();
  }
}

function semesterr() {
  semester = document.getElementById('select_catalog').value;


  if (semester > 0) {
    semester_check = true;
    user_data.semester = semester;
    // alert("came in semester");
    if_all_true();
  }
  else {
    alert("Please Select Semester")
    return;
  }
}



  function if_all_true()
  {
    document.getElementById("submit").style.display = 'block';
    document.getElementById("btn2").style.display = 'none';
  }