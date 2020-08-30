$(function(){
    var lang = document.documentElement.lang;
    
    
    // console.log(portfolio.text());
    // console.log(lang);

    if (lang === 'en-GB' && $('.breadcrumb a[href$="portfolio/"]')){
        var portfolioSingle = $('.breadcrumb a[href$="portfolio/"]');
        portfolioSingle.attr('href', '../');
        portfolioSingle.text('Portfolio');
    }
    
    if (lang === 'en-GB' && $('.archive .breadcrumb_last')){
        var portfolioArchive = $('.archive .breadcrumb_last');
        portfolioArchive.text('Portfolio');
    }
})
