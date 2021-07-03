var Ajax = function () {
    var pageURL, ajaxLink, ajaxTitle, ajaxURL, ajaxHash; var runPageload = function () {
        // function loadSpinner() {
        //     if (window.Spinner) {
        //         if (!$('#spinner').length) { $('body').append('<div id="spinner"></div>'); }
        //         var opts = { lines: 11, length: 9, width: 5, radius: 12, corners: 0.4, color: '#a87fc6', className: 'spinner', top: '45%', left: '55%' }; var target = document.getElementById('spinner'); var spinner = new Spinner(opts).spin(target);
        //     }
        // }; function pluginUnload() { var pluginList = ['.datepicker', '.rangepicker', '.colorpicker', '.rgbapicker', '.timepicker', '#graph']; $.each(pluginList, function (i, e) { if ($(e).length) { $(e).detach(); }; }); }; var loadcontent = function () { $.ajax({ beforeSend: function () { $('#content_wrapper').addClass('animated animated-shortest fadeOut'); $('#defaultModal, #formModal, #alertModal').remove(); loadSpinner(); $('body').removeClass(pageURL.toLowerCase() + " " + ajaxHash.substring(1) + '-page').addClass(ajaxTitle + '-page'); }, url: ajaxURL, cache: true, success: function (data) { pluginUnload(); $('#content_wrapper').html(data); }, complete: function () { $('#content_wrapper').removeClass('fadeOut').addClass('animated animated-shortest fadeInUp'); $('#spinner').empty(); setTimeout(function () { $('#content').removeClass('animated animated-shortest fadeIn'); }, 1000); } }); }; jQuery.ajaxSetup({ cache: true }); $('.sidebar-menu li a, .user-menu a, .sidebar_right_menu a').on('click', function (e) {
        //     if ($(e.currentTarget).hasClass('accordion-toggle')) { return; }
        //     if ($('#ajax-option').length && !$('#ajax-option').prop('checked')) { return; }
        //     if ($(e.currentTarget).hasClass('ajax-disable')) { return; }
        //     e.preventDefault(); pageURL = window.location.pathname.slice(0, -5).split('/').pop(); ajaxLink = $(e.currentTarget).attr('href'); ajaxTitle = ajaxLink.slice(0, -5); ajaxURL = 'ajax/' + ajaxLink; ajaxHash = window.location.hash; if ('#' + ajaxTitle == ajaxHash) { return; }
        //     window.location.hash = ajaxTitle; $('a[href="' + ajaxHash.substring(1) + '.html"]').parent('li').removeClass('active'); $(e.currentTarget).parent('li').addClass('active')
        //     loadcontent();
        // });
    }
    return { init: function () { runPageload(); } }
}();