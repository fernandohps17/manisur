// ----------------------------------- MAPA -----------------------------------------------------------

(() => {
    setTimeout(() => {
        mapGoogle('map1', "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12834.061309686856!2d-6.175023!3d36.4692676!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0dccbe15628fb7%3A0x510428857fd90a80!2sManisur%202005%20SL!5e0!3m2!1ses-419!2sve!4v1697155694057!5m2!1ses-419!2sve");
    }, 4000);
})();

function mapGoogle(element, map) {
    var iframeTag = document.createElement('iframe');
    iframeTag.title = 'Mapa'
    iframeTag.src = map;

    document.getElementById(element).appendChild(iframeTag);
    document.getElementById('cardMap').style.display = 'grid';
}