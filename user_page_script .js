function checkSelection() {
  let grade = document.getElementById("grade").value;
  let subject = document.getElementById("subject").value;
  let url;

  if (grade == 3 && subject == "math") {
    url = "Grade.3_Subject.Math.php";
  } else if (grade == 4 && subject == "math") {
    url = "https://www.example.com/math-grade-4";
  } else if (grade == 5 && subject == "math") {
    url = "https://www.example.com/math-grade-5";
  } else if (grade == 6 && subject == "math") {
    url = "https://www.example.com/math-grade-6";
  } else if (grade == 7 && subject == "math") {
    url = "https://www.example.com/math-grade-7";
  } else if (grade == 8 && subject == "math") {
    url = "https://www.example.com/math-grade-8";
  } else if (grade == 9 && subject == "math") {
    url = "https://www.example.com/math-grade-9";
  } else if (grade == 10 && subject == "math") {
    url = "https://www.example.com/math-grade-10";
  } else if (grade == 11 && subject == "math") {
    url = "https://www.example.com/math-grade-11";
  } else if (grade == 12 && subject == "math") {
    url = "https://www.example.com/math-grade-12";

  } else if (grade == 3 && subject == "science") {
    url = "https://www.example.com/science-grade-3";
  } else if (grade == 4 && subject == "science") {
    url = "Grade.4_Subject.Science.php";
  } else if (grade == 5 && subject == "science") {
    url = "https://www.example.com/science-grade-5";
  } else if (grade == 6 && subject == "science") {
    url = "https://www.example.com/science-grade-6";
  } else if (grade == 7 && subject == "science") {
    url = "https://www.example.com/science-grade-7";
  } else if (grade == 8 && subject == "science") {
    url = "https://www.example.com/science-grade-8";
  } else if (grade == 9 && subject == "science") {
    url = "https://www.example.com/science-grade-9";
  } else if (grade == 10 && subject == "science") {
    url = "https://www.example.com/science-grade-10";
  } else if (grade == 11 && subject == "science") {
    url = "https://www.example.com/science-grade-11";
  } else if (grade == 12 && subject == "science") {
    url = "https://www.example.com/science-grade-12";
  }

 else if (grade == 3 && subject == "history") {
    url = "https://www.example.com/science-grade-3";
  } else if (grade == 4 && subject == "history") {
    url = "https://www.example.com/science-grade-4";
  } else if (grade == 5 && subject == "history") {
    url = "Grade.5_Subject.History.php";
  } else if (grade == 6 && subject == "history") {
    url = "https://www.example.com/science-grade-6";
  } else if (grade == 7 && subject == "history") {
    url = "https://www.example.com/science-grade-7";
  } else if (grade == 8 && subject == "history") {
    url = "https://www.example.com/science-grade-8";
  } else if (grade == 9 && subject == "history") {
    url = "https://www.example.com/science-grade-9";
  } else if (grade == 10 && subject == "history") {
    url = "https://www.example.com/science-grade-10";
  } else if (grade == 11 && subject == "history") {
    url = "https://www.example.com/science-grade-11";
  } else if (grade == 12 && subject == "history") {
    url = "https://www.example.com/science-grade-12";
  }

 else if (grade == 3 && subject == "english") {
    url = "https://www.example.com/science-grade-3";
  } else if (grade == 4 && subject == "english") {
    url = "https://www.example.com/science-grade-4";
  } else if (grade == 5 && subject == "english") {
    url = "https://www.example.com/science-grade-5";
  } else if (grade == 6 && subject == "english") {
    url = "Grade.6_Subject.English.php";
  } else if (grade == 7 && subject == "english") {
    url = "https://www.example.com/science-grade-7";
  } else if (grade == 8 && subject == "english") {
    url = "https://www.example.com/science-grade-8";
  } else if (grade == 9 && subject == "english") {
    url = "https://www.example.com/science-grade-9";
  } else if (grade == 10 && subject == "english") {
    url = "https://www.example.com/science-grade-10";
  } else if (grade == 11 && subject == "english") {
    url = "https://www.example.com/science-grade-11";
  } else if (grade == 12 && subject == "english") {
    url = "https://www.example.com/science-grade-12";
  }

   else if (grade == 3 && subject == "geography") {
    url = "https://www.example.com/science-grade-3";
  } else if (grade == 4 && subject == "geography") {
    url = "https://www.example.com/science-grade-4";
  } else if (grade == 5 && subject == "geography") {
    url = "https://www.example.com/science-grade-5";
  } else if (grade == 6 && subject == "geography") {
    url = "https://www.example.com/science-grade-6";
  } else if (grade == 7 && subject == "geography") {
    url = "Grade.7_Subject.Geography.php";
  } else if (grade == 8 && subject == "geography") {
    url = "https://www.example.com/science-grade-8";
  } else if (grade == 9 && subject == "geography") {
    url = "https://www.example.com/science-grade-9";
  } else if (grade == 10 && subject == "geography") {
    url = "https://www.example.com/science-grade-10";
  } else if (grade == 11 && subject == "geography") {
    url = "https://www.example.com/science-grade-11";
  } else if (grade == 12 && subject == "geography") {
    url = "https://www.example.com/science-grade-12";
  }


  window.open(url, "_blank");
}