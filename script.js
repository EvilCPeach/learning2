// $aa = "АХАХАХАХА";
// $ff = 100;
// $style = 'font-size:100;';
// for($i = 0; $i<1; $i--)
//     {
//         if($i>-5)
//             alert('EEEEEE');
//         else if($i<=-5)
//             {
//                 for($a = 0; $a<1000000; $a++)
//                     {
//                         alert("")
//                         alert($aa);  
//                         <style>
//                             *{
//                                 font-size
//                             }
//                         </style>
//                     }

//             }  
//     }
// if(a>0)
//     {
//         var a = 25;
//     }
// let a;
// var a;
// const c = 12;
// const headerColor = '#000000';
// let a = '5px';
// let b = '6px';
// console.log(parseInt(a)+parseInt(b));
// let str = 12345;
// console.log(String(str).length);
// let str2 = 'abcde';
// let str3 = str2[4] + str2[3] + str2[2] + str2[1] + str2[0];
// console.log(str3);

// Дан многомерный массив произвольного уровня вложенности, например, такой:
// [1, [2, 7, 8], [3, 4, [5, [6, 7]]]]
// Напишите код, который развернет наш многомерный массив в одномерный. 
// Для приведенного выше массива это будет выглядеть вот так:
// [1, 2, 7, 8, 3, 4, 5, 6, 7]

// let array = [1, [2, 7, 8], [3, 4, [5, [6, 7]]]];
// function damn(array) {
// 	for (let key of array) 
//     {
// 		if (typeof key == 'object') 
//         {
// 			damn(key);
// 		} 
//         else 
//         {
// 			console.log(key);
// 		}
// 	}
// }
// damn(array);
// console.log(array.flat(Infinity)); 
// тоже самое, что и функция выше

// Дан массив с числами. 
// Используя метод map извлеките из каждого элемента массива квадратный корень и запишите результат в новый массив.

// let array = [25,33,4,5];
// let arrayTwo = [];
// let result = array.map(function(elem){
//     return arrayTwo.push(Math.sqrt(elem));
// });
// console.log(arrayTwo);

// Дан массив со строками. 
// Используя метод map в конец значению каждого элемента массива добавьте символ '!'.

// let array = ["Аааа","АААААА"];
// let result = array.map(function(elem){
//     return elem + '!';
// });
// console.log(result);

// Дан массив со строками. 
// Используя метод map переверните символы каждой строки в обратном порядке.

// let array = ["abc","bca","vyu"];
// let arrayTwo = [];
// let result = array.map(function(elem){
//     return arrayTwo.push(elem.split('').reverse().join(''));
// });
// console.log(arrayTwo);

// Дан следующий массив:

// let arr = ['123', '456', '789'];
// Используя метод map преобразуйте этот массив в следующий:

// let arr = [
// 	[1, 2, 3],
// 	[4, 5, 6],
// 	[7, 8, 9]
// ];

// let result = arr.map(item => item.split('').map(Number));
// console.log(result);

// Дан массив с числами. 
// Используя метод map запишите в каждый элемент массива значение этого элемента, умноженное на его порядковый номер в массиве.

// let array = [1,2,3,4];
// let result = array.map(function(elem,index){
//     return elem * index;
// });
// console.log(result);

// Дан массив с числами. 
// Оставьте в нем только те числа, произведение которых на их порядковый номер меньше 30.

// let array = [1,2,3,4,5,6,7,8,9];
// let result = array.filter(
//     function(elem,index){
//         if((elem * index) < 30)
//         {
//             return true;
//         }
//         else
//         {
//             return false;
//         }
//     }
// );
// console.log(result);
// let result = array.filter((elem,index) => elem * (index-1) < 30);
// console.log(result);

// метод every - если все элементы true
// метод some - если хотя бы один элемент true

// let users = [
//     {id: 'john', name: "John Smith", age: 20},
//     {id: 'ann', name: "Ann Smith", age: 24},
//     {id: 'pete', name: "Pete Peterson", age: 31},
//   ];
// function groupById(array) {
//     return array.reduce((obj, value) => {obj[value.id] = value; 
//     return obj;
//     }, {})
// }
// let usersById = groupById(users);
// console.log(usersById);

// let arr = ['John', 'Smit', 'development', 'programmer', 2000];
// let [name,lastname,deparment, position, salary] = arr;
// console.log(name,lastname,deparment, position, salary);
// console.log(...arr);

// function func(){
//   return ['John', 'Smit', 'development', 'programmer', 2000];
// }
// let [name,lastname,deparment, position, salary] = func();
// console.log(...func());

// let arr = [2024, 30, 9];
// let [, month, day] = arr;
// console.log(day);

// let arr = [2024, 30];
// let [year, month, day = 9] = arr;
// console.log(...arr,day);

// function func(){
//   return (new Date).getDate();
// }
// console.log(func());

// let date = new Date();
// console.log(date.());

// function addZero(num)
// {
//   if(num >= 0 && num <= 9)
//   {
//     return '0' + num;
//   }
//   else{
//     return num;
//   }
// }

// let date = new Date(2004,10,1);
// let months = ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'];
// let days = ['Воскресенье','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота'];
// console.log(days[date.getDay()],date.getHours() + ':' + addZero(date.getMinutes()) + ':' + date.getSeconds(), date.getDate() + '.' + addZero(date.getMonth()+1) + '.' + date.getFullYear(), months[date.getMonth()])
// console.log(days[date.getDay()]);
// let date = new Date(2004,10,1);

// let today = new Date();
// let message = new Date(prompt("Введите дату дд.мм.гггг", "30.09.2024").split('.'));
// alert("До нового года осталось:",((message.getDate() - today.getDate))/(1000*60*60*24));


// function each(arr, callback) {
// 	let result = [];
// 	for (let elem of arr) {
// 		result.push( callback(elem) ); // вызываем функцию-коллбэк
// 	}
// 	return result;
// }

// let result = each([1, 2, 3, 4, 5], function(num) {
// 	return num ** 2;
// });
// console.log(result);


