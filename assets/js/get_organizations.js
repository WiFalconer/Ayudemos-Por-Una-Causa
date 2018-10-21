getJSON('./entidad/get_all').then(parsePromise).catch(showErrorMessage).then(hideSpinner);

function addCardToHTML(organization) {
    $('#card_container').append(`
        <div class="ui card transition hidden">
            <a href="/home/OSFL/${organization.id}" class="image">
                <img src="${organization.banner_pic}">
                <img src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?auto=compress&cs=tinysrgb&h=350">
            </a>
            <div class="content">
                <div class="header">${organization.nombre}</div>
                <div class="description">
                    ${organization.mision}
                </div>
            </div>
            <a class="ui bottom attached button" href="/home/OSFL/${organization.id}/#donate" style="color: inherit">
                Donate
            </a>
        </div>
    `);
}

function parsePromise(OSFL) {
    if(OSFL.length){
        OSFL.forEach(org => {
            addCardToHTML(org);
        });
        showCards();
    } else {
        showErrorMessage('Array Was Empty')
    }
}

function showErrorMessage(err) {
    console.log('ERROR: ', err);
    $('#error_message').show();
}

function hideSpinner() {
    $('#spinner').hide();
}