function updateSitemapDate() {
    // Fecha actual
    const today = new Date();
   
    // Obteniendo la etiqueta 'lastmod' del Sitemap.xml
    const lastmodTag = document.querySelector('lastmod');
   
    // Si no se encuentra la etiqueta 'lastmod', terminamos la función
    if (!lastmodTag) {
       console.error('No se encontró la etiqueta "lastmod" en el Sitemap.xml');
       return;
    }
   
    // Formateando la fecha actual como 'YYYY-MM-DD'
    const formattedDate = today.toISOString().slice(0, 10);
   
    // Actualizando el contenido de la etiqueta 'lastmod' con la fecha actual
    lastmodTag.textContent = formattedDate;
   
    console.log('La fecha del Sitemap.xml ha sido actualizada a:', formattedDate);
   }
   
   // Llamada a la función para actualizar la fecha del Sitemap.xml
   updateSitemapDate();