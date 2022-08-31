alert("Welcome: THE WORLD IS YOURS");

var questions = [
    {
        prompt: "Finish the sentence: If it's not beneficial it's...?\n(a) Artificial\n\
        (b)  Detrimental\n\(c)  Cool",
        answer: "a"
    },
    {
        prompt: "Finish the sentence: When we show up we...?\n(a)  Act a Fool\n\
        (b)  Definitely Clown\n\(c)  Show Out",
        answer: "c"
    },
    {
        prompt: "Where was NGP first show?\n(a)  Deep Elum\n\
                (b)  Madison Square Garden\n\(c)  Longhorn Ballroom",
        answer: "c"
    },
];

var score = 0;

for(var i=0; i < questions.length; i++){
    var response = window.prompt(questions[i].prompt);
    if(response == questions[i].answer){
        score++;
        alert("When you show up, you show out!!!");
    } else {
        alert("Invest more time into what you are doing.");
    }
}

alert("You got " + score + "/" + questions.length);


document.querySelector("#dj_button").addEventListener("click", djClick); 

function djClick() {
    var djQuestions = [
        {
            prompt: "Do others say you have a pleasant voice?\n(a) Yes\n\
                    (b)  Sometimes\n\(c)  Never",
            answer: "a"
        },
        {
            prompt: "How many different music genres do you listen?\n(a) 1-3\n\
                    (b)  2-5\n\(c)  I like all music",
            answer: "c"
        },
        {
            prompt: "How long can you remain standing in one spot?\n(a) 2-5 hour\n\
                    (b)  7 hour\n\(c)  10 hour",
            answer: "c"
        },
    ];

    var score = 0;

    for(var i=0; i < djQuestions.length; i++){
        var response = window.prompt(djQuestions[i].prompt);
        if(response == djQuestions[i].answer){
            score++;
            alert("When you show up, you show out!!!");
        } else {
            alert("Invest more time into what you are doing.");
        }
    }
    
    alert("You got " + score + "/" + djQuestions.length);

}

document.querySelector("#songwriter_button").addEventListener("click", songwriterClick);

function songwriterClick() {
    var songwriterQuestions = [
        {
            prompt: "Do you average more than 30 likes every 10 posts on social media?\n(a) Yes\n\
                    (b)  Sometimes\n\(c)  Never",
            answer: "a"
        },
        {
            prompt: "Which of these do you think is best?\n(a) Being on Time\n\
                    (b)  Communication\n\(c)  Collaboration",
            answer: "c"
        },
        {
            prompt: "How do you rate your storytelling ability?\n(a) Drama\n\
                    (b)  Action\n\(c)  Suspense",
            answer: "c"
        },
    ];

    var score = 0;

    for(var i=0; i < songwriterQuestions.length; i++){
        var response = window.prompt(songwriterQuestions[i].prompt);
        if(response == songwriterQuestions[i].answer){
            score++;
            alert("When you show up, you show out!!!");
        } else {
            alert("Invest more time into what you are doing.");
        }
    }
    
    alert("You got " + score + "/" + songwriterQuestions.length);
}

document.querySelector("#music_manager_button").addEventListener("click", music_managerClick);

function music_managerClick() {
    var musicManagerQuestions = [
        {
            prompt: "How many books have you read through the last 6 weeks?\n(a) 5\n\
                    (b)  1\n\(c)  2",
            answer: "a"
        },
        {
            prompt: "Whose side should you take in a debate?\n(a) Your best Friends\n\
                    (b)  The side most Factual\n\(c)  Stay Neutral",
            answer: "c"
        },
        {
            prompt: "When partying with friends and alchol is served do you...?\n(a) Drink till your broke\n\
                    (b)  Ask for Advice\n\(c)  Offer to be the Designated Driver",
            answer: "c"
        },
    ];

    var score = 0;

    for(var i=0; i < musicManagerQuestions.length; i++){
        var response = window.prompt(musicManagerQuestions[i].prompt);
        if(response == musicManagerQuestions[i].answer){
            score++;
            alert("When you show up, you show out!!!");
        } else {
            alert("Invest more time into what you are doing.");
        }
    }
    
    alert("You got " + score + "/" + musicManagerQuestions.length);
}


