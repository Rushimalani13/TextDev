
var heading1=document.getElementById("heading1");
var heading2=document.getElementById("heading2");
var headconvert=document.getElementById("headconvert");


// var subhead1=document.getElementById("subhead1");
// var subhead2=document.getElementById("subhead2");
// var subconvert=document.getElementById("subconvert");

// var paratext1=document.getElementById("paratext1");
// var paratext2=document.getElementById("paratext2");
// var paraconvert=document.getElementById("paraconvert");

 
headconvert.addEventListener("click",function(){

// console.log(heading1.value);
// heading2.value=heading1.value;
var str=heading1.value;
var str1=heading1.value;
var s=str.length;

str = str.replace(/(^\s*)|(\s*$)/gi,"");
str = str.replace(/[ ]{2,}/gi," ");
str = str.replace(/\n /,"\n");
var w= str.split(' ').length;


const strArr = str.split(' ');
   const creds = strArr.reduce((acc, val) => {
      let { length, word } = acc;
      if(val.length < length){
         length = val.length;
         word = val;
      };
      return { length, word };
   }, {
      length: Infinity,
      word: ''
   });
   var smallstr= creds.word;

   const word = strArr.reduce((acc, val) => {
      let { length: len } = acc;
      if(val.length > len){
         acc = val;
      };
      return acc;
   }, '');
   var longstr= word;

var sentence=` Charater in Content:-${s}\n Words in Content:-${w}\n Smallest string in Content:-${smallstr}\n Longest string in Content:-${longstr}`;
heading2.value=sentence;

});

// subconvert.addEventListener("click",function(){
// console.log(subhead1.value);
// subhead2.value=subhead1.value;
// });

// paraconvert.addEventListener("click",function(){
// console.log(paratext1.value);
// paratext2.value=paratext1.value;
// });