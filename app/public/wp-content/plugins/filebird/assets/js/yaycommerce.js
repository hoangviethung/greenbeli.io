jQuery( document ).ready(function() {
    jQuery( 'body' )
		.on( 'thickbox:iframe:loaded', function() {
            const $wpButton = jQuery('#TB_iframeContent').contents().find('a#plugin_install_from_iframe[data-slug="yaymail"]')
            
            if (!$wpButton) return;
            $wpButton.css({ display: "none" })

            const $installButton = document.createElement('a')
            $installButton.href = $wpButton.attr('href')
            $installButton.id = 'njt-yaycommerce'
            $installButton.innerText = $wpButton.text()
            $installButton.setAttribute('class', 'button button-primary right')
            $installButton.onclick = function(event){
                event.preventDefault()
                const that = this
                jQuery.ajax({
                url: ajaxurl,
                method: 'POST',
                data: {
                        action: 'njt_yaycommerce_cross_install',
                        nonce: yaycommerce.nonce
                    },
                    beforeSend: function(){
                        jQuery(that).addClass('updating-message disabled')
                    },
                    success: function(response){
                        if (response.success) {
                            window.tb_remove()
                            const $link = jQuery('#toplevel_page_woocommerce a[data-title="YayMail"]')
                            $link.attr('href', yaycommerce.yaymail_url)
                            $link.removeClass("thickbox open-plugin-details-modal")
                            $link.removeAttr('aria-label data-title')
                            $link.off('click')
                        }
                    },
                    error: function(response){
                        window.tb_remove()
                        console.log(response.error)
                    }
                })
            }
            $wpButton.parent().append($installButton)

            const $noThankButton = document.createElement('a')
            $noThankButton.id = "njt-yc-popup-no-thank"
            $noThankButton.innerText = yaycommerce.no_thank_text
            $noThankButton.href = 'javascript:;'
            $noThankButton.onclick = function(event){
                event.preventDefault()
                jQuery.ajax({
                    url: ajaxurl,
                    method: 'POST',
                    data: {
                            action: 'njt_yaycommerce_dismiss',
                            nonce: yaycommerce.nonce,
                            type: 'popup'
                        },
                        beforeSend: function(){
                            window.tb_remove()
                        },
                        success: function(){
                            jQuery('#toplevel_page_woocommerce a[data-title="YayMail"]').hide()
                        },
                        error: function(response){
                            window.tb_remove()
                            console.log(response.error)
                    }
                })
            }

            $wpButton.parent().append($noThankButton)
		});
    
    jQuery('#njt-yc-noti-dismiss').click(function(){
        jQuery.ajax({
            url: ajaxurl,
            method: 'POST',
            data: {
                    action: 'njt_yaycommerce_dismiss',
                    nonce: yaycommerce.nonce,
                    type: 'noti'
                },
                success: function(){
                    jQuery('#njt-yc').hide("slow")
                },
                error: function(response){
                    jQuery('#njt-yc').hide("slow")
                    console.log(response.error)
            }
        })
    })
});