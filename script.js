// var options=[]; // Варианты ответов
// var test=[]; //Массив вопросов
// //Описание класса тестовых вопросов "один из нескольких"
// class radiobutton {
//     constructor(question, options, correct) {
//         this.question=question; //Вопрос
//         this.options=options; //варианты
//         this.correct=correct; //номер правильного ответа
//     }
//
//     insert(number) { //метод вставки вопроса в тестовое задание, number - номер вопроса
//         var div=document.getElementById('test');//Блочный элемент для вставки вопросов
//         var tabl=document.createElement('table'); //задания помещаются в таблицы
//         tabl.id=number;
//         var row=document.createElement('tr');
//         row.innerHTML='<p>'+this.question+'</p>'; //1-я строка вопрос
//         tabl.appendChild(row);
//         var field=document.createElement('fieldset');//рамка обвести ответы
//
//         for (var i = 0; i < this.options.length; i++) {
//             row=document.createElement('tr');
//             var id1=number+this.options[i];// id для input состоит из номера вопроса+варианта ответа
//             row.innerHTML=
//               `<p>
//                 <input type="radio" name="${number}${id1}" id="${id1}">
//                 <label for="${id1}">${this.options[i]}</label>
//               </p>`;
//             field.appendChild(row);
//         }
//         tabl.appendChild(field);
//         div.appendChild(tabl);
//     }
//     validate(i) {
//         //Метод проверки ответа i - номер вопроса
//         //по id найти input с правильным ответом и убедиться что он выбран (свойство checked)
//         var id=i+this.options[this.correct];
//         var point=document.getElementById(id);
//         if (point.checked) {return true;}
//     }
// }
// //Создадим на основе созданного ранее класса несколько объектов - тестовых вопросов
// test.push(new radiobutton('Выберите основную единицу длины в системе СИ:', ['Аршин', 'Метр', 'Литр', 'Верста'], 1));
// test.push(new radiobutton('Выберите производную единицу системы СИ:', ['Кубический метр', 'Метр', 'Лошадиная сила', 'Ампер'], 0));
// test.push(new radiobutton('Кто подписал первый документ, регламентирующий единство измерений на Руси?', ['Петр I', 'Иван Грозный', 'В.И. Ленин', 'Д.И. Менделеев'], 1));
// //При загрузке страницы - создать тест
// function creat_test() {
//     var div=document.getElementById('test');
//
//     for (var i = 0; i < test.length; i++) {
//         p=document.createElement('p');
//         p.innerHTML='<strong>Вопрос '+Number(i+1)+'</strong>';
//         div.appendChild(p);
//         test[i].insert(i);
//     }
// }
//
// // Проверка результатов тестирования
// function result() {
//     let n=0;
//     for (var i = 0; i < test.length; i++) {
//         if (test[i].validate(i)) n++;
//     }
//     alert('Количество правильных ответов: '+n);
// }
//
//

const testList = document.querySelector('.test-list')
const d1 = new Date('2017-03-11T11:30:00');
const d2 = new Date('2017-03-11T11:30:00Z');
console.log(d1.toString())
console.log(d2.toString())

const date = new Date()
// console.log(date.getTimeZoneOffset())
// const currentTimeZoneOffsetInHours = date.getTimezoneOffset();
// testList.innerHTML = `<div>${currentTimeZoneOffsetInHours}</div>`;

function formatDate(date) {
	const fullMonth = date.getMonth() < 10 ? '0' + date.getMonth() : date.getMonth();
	return `${date.getDate()}.${fullMonth}.${date.getFullYear()} ${
		date.getHours()}:${date.getMinutes()}`
}

const moscow = new Date();
const currentTimeZoneOffsetInHours = Math.abs(moscow.getTimezoneOffset() / 60);


testList.innerHTML = `<div>Время ${currentTimeZoneOffsetInHours !== 3 ? '(по МСК)' : ''}</div>`;

