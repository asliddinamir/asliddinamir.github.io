const date = document.querySelector('#date')
const date2 = document.querySelector('#date2')
const date3 = document.querySelector('#date3')


const month = new Date().toLocaleString(
    'default', {month: 'long'}
  );
const year = new Date().getFullYear()
const day =  new Date().getDate()

date.innerText = `(as of ${month} ${day}, ${year})`
date2.innerText = `(as of ${month} ${day}, ${year})`
date3.innerText = `(as of ${month} ${day}, ${year})`