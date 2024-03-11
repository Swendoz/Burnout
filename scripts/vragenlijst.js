let results;

fetch('../results.json')
    .then(response => response.json())
    .then(data =>
    {
        console.log("Data");
        console.log(data);
        results = data;
    })
    .catch(error =>
    {
        console.error('Hata:', error);
    });

const sendButton = document.querySelector('.send-button');

sendButton.addEventListener('click', function ()
{
    event.preventDefault();
    let isError = false;
    let score = 0;
    console.log("Clicked");

    var form = document.querySelector('#vragenlijst-form form');
    var data = new FormData(form);
    const radioGroups = document.querySelectorAll('.form-group .radio-group');
    const formOverzicht = document.querySelector('.form-overzicht');
    formOverzicht.innerHTML = '';

    radioGroups.forEach((radioGroup) =>
    {
        console.log(radioGroup);
        console.log(radioGroup.classList.contains('checked'));
        if (radioGroup.classList.contains('checked') === false)
        {
            SendError('Gelieve alle velden in te vullen');
            isError = true;
            return;
        }
    });

    if (isError)
        return;

    for (var pair of data.entries())
    {
        if (pair[ 1 ] === '')
        {
            SendError('Gelieve alle velden in te vullen');
            return;
        }


        if (pair[ 0 ] === 'name')
        {
            const nameRegex = /^[a-zA-Z\s]*$/;
            if (!nameRegex.test(pair[ 1 ]))
            {
                SendError('Gelieve een geldige naam in te vullen');
                return;
            }
        }

        if (pair[ 0 ] === 'email') 
        {
            const mailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!mailRegex.test(pair[ 1 ]))
            {
                SendError('Gelieve een geldig e-mailadres in te vullen');
                return;
            }
        }
    }

    const uitslag = document.querySelector('#uitslag');

    const userName = document.querySelector('input[name="name"]').value;
    const userEmail = document.querySelector('input[name="email"]').value;

    uitslag.querySelector('.user-name').innerHTML = userName;

    formOverzicht.appendChild(CreateQuestion('Naam', userName));
    formOverzicht.appendChild(CreateQuestion('E-Mail', userEmail));

    for (var pair of data.entries())
    {
        if (pair[ 0 ] === 'name' || pair[ 0 ] === 'email') continue;

        console.log("Key: " + pair[ 0 ] + ", Value: " + pair[ 1 ]);
        const question = document.createElement('div');
        const questionText = document.createElement('div');
        const inputText = document.createElement('div');
        question.classList.add('question');
        questionText.classList.add('question-text');
        inputText.classList.add('input-text');


        // Question text
        const questionTextsAl = document.querySelectorAll('.form-group:has(.radio-group) label');

        console.log("Question texts:");
        console.log(questionTextsAl);

        questionTextsAl.forEach((questionTextAl) =>
        {
            if (questionTextAl.classList.contains(pair[ 0 ]))
            {
                console.log("Girdi question text: " + pair[ 0 ] + ", " + pair[ 1 ]);
                questionText.innerHTML = questionTextAl.innerHTML;
            }
        });

        // Input text
        const inputTextsAl = document.querySelectorAll('.form-group .radio-group input');

        console.log("Input texts:");
        console.log(inputTextsAl);

        inputTextsAl.forEach((inputTextAl) =>
        {
            console.log("Name: " + inputTextAl.name + ", Value: " + inputTextAl.value);
            if (inputTextAl.name === pair[ 0 ] && inputTextAl.value === pair[ 1 ])
            {
                console.log(inputTextAl.parentElement.querySelector('label').innerHTML + ', ' + inputTextAl.value);
                inputText.innerHTML = inputTextAl.parentElement.querySelector('label').innerHTML;
            }
        });

        question.appendChild(questionText);
        question.appendChild(inputText);
        formOverzicht.appendChild(question);

        score += parseInt(pair[ 1 ]);

        console.log(pair[ 0 ] + ', ' + pair[ 1 ]);
    }

    const procentScore = Math.round(score / 21 * 100);
    const detailsText = document.querySelector(".details");

    console.log("Score");
    console.log(procentScore);

    if (procentScore < 40)
    {
        detailsText.innerHTML = results.low;
    }
    else if (procentScore >= 41 && procentScore < 70)
    {
        detailsText.innerHTML = results.medium;
    }
    else if (procentScore >= 71)
    {
        detailsText.innerHTML = results.high;
    }

    console.log("Score: " + score);
    document.querySelector('.procent-text .procent').innerHTML = procentScore + '%';

    uitslag.classList.add('active');

    // Scroll to form overzicht
    window.scrollTo({
        top: uitslag.offsetTop - 50,
        behavior: 'smooth'
    });
});

const inputRadios = document.querySelectorAll('input[type="radio"]');

inputRadios.forEach((input) =>
{
    input.addEventListener('change', function ()
    {
        if (input.checked)
        {
            input.parentElement.parentElement.classList.add('checked');
        }
    });
});

const errorEl = document.querySelector('.error');
let timeout;

const SendError = (message) =>
{
    timeout && clearTimeout(timeout);

    window.scrollTo({
        top: errorEl.offsetTop - 100,
        behavior: 'smooth'
    });

    errorEl.innerHTML = message;
    errorEl.classList.add('active');
    timeout = setTimeout(() =>
    {
        errorEl.classList.remove('active');
        errorEl.innerHTML = '';
    }, 3000);
}

const CreateQuestion = (questionText, inputText) =>
{
    const question = document.createElement('div');
    const questionTextEl = document.createElement('div');
    const inputTextEl = document.createElement('div');
    // const lineEl = document.createElement('div');
    question.classList.add('question');
    questionTextEl.classList.add('question-text');
    inputTextEl.classList.add('input-text');
    // lineEl.classList.add('line');
    questionTextEl.innerHTML = questionText;
    inputTextEl.innerHTML = inputText;
    question.appendChild(questionTextEl);
    // question.appendChild(lineEl);
    question.appendChild(inputTextEl);
    return question;
}

document.querySelector(".send-mail").addEventListener('click', () =>
{
    const userEmail = document.querySelector('input[name="email"]').value;
    const uitslag = document.querySelector('#uitslag');
    const sendMailEl = document.querySelector('.send-mail');
    sendMailEl.remove();

    // let htmlContent = ;

    let htmlContent = `
    <html lang="en">
		<head>
		<style>
			body {
				height: 100%;
				font-family: "Arial", sans-serif;
				background-color: #f4f4f4;
				color: #333;
				padding: 20px;
			}

			.container {
				height: 100%;
				max-width: 600px;
				margin: 0 auto;
				background-color: #fff;
				padding: 20px;
				border-radius: 8px;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			}

            .active {
                display: flex;
            }

            h2 {
                font-size: 3rem;
                width: 100%;
                text-align: center;
            }

            .procent-text {
                font-size: 2rem;
            }

            .details {
                font-size: 1.5rem;
            }

            .form-overzicht {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .form-overzicht .question {
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 1rem;
                font-size: 1.2rem;
                padding: 1rem 0;
            }

            .form-overzicht .question .question-text {
                font-size: 1.5rem;
                font-weight: 700;
            }

		</style>
	</head>
	<body>
		<div class="container">
            ${ uitslag.innerHTML }
		</div>
	</body>
</html>`

    console.log(htmlContent);
    console.log("Sending mail");
    sendEmail(userEmail, htmlContent);
});

function sendEmail(toEmail, html)
{
    var xhr = new XMLHttpRequest();
    var url = "/scripts/sendMail.php";
    var params = "to=" + encodeURIComponent(toEmail) + "&html=" + encodeURIComponent(html);

    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onload = function ()
    {
        if (xhr.status == 200)
        {
            alert(xhr.responseText);
        } else
        {
            alert("Mail gönderilirken bir hata oluştu.");
        }
    };

    xhr.send(params);
}
