const form = document.querySelector('form');
const invalids = document.querySelectorAll('.invalid');
let response;

form.addEventListener('submit', (e) => {
  e.preventDefault();
  invalids.forEach((e) => (e.style.display = 'none'));
  var fd = new FormData();
  Array.from(form.elements).forEach((e, i) => {
    if (i == 10) return;
    if (i === 5 || i === 6 || i === 7) {
      fd.append(i, e.checked);
    } else {
      fd.append(i, e.value);
    }
  });
  const options = {
    method: 'POST',
    headers: new Headers({
      //   'content-type': 'application/x-www-form-urlencoded',
    }),
    mode: 'no-cors',
    body: fd,
  };

  fetch('./process.php', options)
    .then((res) => {
      return res.json();
    })
    .then((data) => {
      response = data;
      const isValid = Object.values(data).every((e) => e === 'true');
      if (isValid) {
        success();
      } else {
        failure();
      }
    });
});

const success = () => {
  const els = Array.from(form.elements);
  document.querySelector('body').style.backgroundColor = els[4].value;
  const html = document.querySelector('.container');
  html.innerHTML = '<h3>Registered successfully</h3>';
  html.innerHTML += '<h4>Details</h4>';
  const ul = document.createElement('ul');
  const lis = [];
  for (let index = 0; index < 8; index++) {
    lis.push(document.createElement('li'));
  }
  lis[0].innerText = `First Name: ${els[0].value}`;
  lis[1].innerText = `Second Name: ${els[1].value}`;
  lis[2].innerText = `Email: ${els[2].value}`;
  lis[3].innerText = `Date of birth: ${els[3].value}`;
  lis[4].innerText = `Favourite Colour: ${els[4].value}`;
  let gender;
  [els[5], els[7], els[7]].forEach((e) => {
    if (e.checked) {
      gender = e.value;
    }
  });
  lis[5].innerText = `Gender: ${gender}`;
  let select;
  if (els[8].value === '1') select = 'Information Technology';
  if (els[8].value === '2') select = 'Human Resources';
  if (els[8].value === '3') select = 'Finance';
  if (els[8].value === '4') select = 'Public Relations';
  lis[6].innerText = `Department: ${select}`;
  lis[7].innerText = `Password: ${els[9].value}`;
  lis.forEach((e) => {
    ul.append(e);
  });
  html.append(ul);
};

const failure = () => {
  console.log(invalids);
  console.log(response);
  const setInvalid = (i, e) => {
    invalids[i].innerText = e;
    invalids[i].style.display = 'block';
  };
  Object.values(response).forEach((e, i) => {
    if (e === 'true') return;
    if (i === 5 || i === 6) return;
    if (i === 7) {
      if (e === 'true') return;
      else setInvalid(5, e);
    }
    if (i === 8 || i === 9) return setInvalid(i - 2, e);
    setInvalid(i, e);
  });
};
