var quotes = [
  {
    quote: "It's not whether you get knocked down; it's whether you get up.",
    person: "Vince Lombardi"
  },
  {
    quote: "The only way to prove that you’re a good sport is to lose.",
    person: "Ernie Banks"
  },
  {
    quote: "You’re never a loser until you quit trying.",
    person: "Mike Ditka"
  },
  {
    quote: "The will to win is important, but the will to prepare is vital.",
    person: "Joe Paterno"
  },
  {
    quote: "Do not let what you can not do interfere with what you can do.",
    person: "John Wooden"
  }
]

function newQuote () {
  var rand = Math.floor((Math.random() * quotes.length));
 document.getElementById("randomquote").innerHTML = quotes[rand].quote;
 document.getElementById("randomquoteperson").innerHTML = quotes[rand].person;
}

function tweet () {
  var text = document.getElementById("randomquote").innerHTML;
  console.log(text);
  window.open("http://twitter.com/intent/tweet?text=" + text);
}