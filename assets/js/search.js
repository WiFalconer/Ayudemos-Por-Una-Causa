$('#search').submit(function() {
    event.preventDefault();
    let category = $('#category-select').val();
    let name = $('#name-input').val();

    if (name && category) {
        filterOrganizations('/entidad/get_by_name_and_category/' + name + '/' + category);
    } else if (category) {
        filterOrganizations('/entidad/get_by_category/' + category);
    } else if (name) {
        filterOrganizations('/entidad/get_by_name/' + name);
    }

});

function filterOrganizations(url) {
    $('#card_container').empty()
        .append(`<i id="spinner" class="notched circle loading big icon" style="margin-top: 1em;"></i><div id="error_message" class="ui placeholder segment hidden" style="display:none;"><div class="ui icon header"><i class="dont icon"></i>Couldn't find any organizations.</div></div>`);

    $('#spinner').show();
    getJSON(url).then(parsePromise).catch(showErrorMessage).then(hideSpinner);
}
