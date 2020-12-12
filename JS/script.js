$(window).on('load', () => {
    $('.loading-page').hide();
    $('.loaded-page').css('display', 'block');

    $('.delete-stock').click(() => {
        if(confirm("Do you want to delete stock?")){
            return true;
        } else {
            return false;
        }
    })

    $('.add-stock').click(() => {
        if(confirm("Do you want to add stock?")){
            return true;
        } else {
            return false;
        }
    })
});

