<?php

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'YayCommerce' ) ) {
	class YayCommerce {
		private $pluginUrl            = '';
		private $autoInstallUrl       = '';
		private $userCanInstallPlugin = false;
		private $nonce                = '';
		public function __construct() {
			if ( ! function_exists( 'WC' ) || defined( 'YAYMAIL_VERSION' ) ) {
				return;
			}

			if ( function_exists( 'current_user_can' ) && current_user_can( 'install_plugins' ) ) {
				$this->nonce                = wp_create_nonce( 'install-plugin_yaymail' );
				$url                        = self_admin_url( 'update.php?action=install-plugin&plugin=yaymail&_wpnonce=' . $this->nonce );
				$this->autoInstallUrl       = $url;
				$this->userCanInstallPlugin = true;
			} else {
				return;
			}
			$this->pluginUrl = admin_url( 'plugin-install.php?tab=plugin-information&plugin=yaymail&TB_iframe=true&width=772&height=358' );
			add_action( 'admin_init', array( $this, 'init' ) );
		}

		public function init() {
			$popup_sale = get_option( 'yaymail_popup_sale' );
			$noti_sale  = get_option( 'yaymail_noti_sale' );

			if ( empty( $popup_sale ) ) {
				add_submenu_page( 'woocommerce', __( 'Email Builder Settings', 'filebird' ), __( 'Email Customizer', 'filebird' ), 'manage_options', 'install_yaymail_plugin', array( $this, 'settingsPage' ), 2 );
			}

			if ( empty( $noti_sale ) ) {
				add_action( 'admin_notices', array( $this, 'notification' ) );
			}

			add_action( 'woocommerce_email_setting_column_template', array( $this, 'template_column_action' ), 10, 1 );
			add_action( 'admin_footer', array( $this, 'footer' ) );
			add_filter( 'woocommerce_email_setting_columns', array( $this, 'template_column_filter' ) );
			add_action( 'wp_ajax_njt_yaycommerce_cross_install', array( $this, 'ajax_install_plugin' ) );
			add_action( 'wp_ajax_njt_yaycommerce_dismiss', array( $this, 'ajax_dismiss_plugin' ) );

			wp_enqueue_style( 'thickbox' );
			wp_enqueue_script( 'yaycommerce', NJFB_PLUGIN_URL . 'assets/js/yaycommerce.js', array( 'plugin-install', 'updates' ), NJFB_VERSION, true );
			wp_localize_script(
				'yaycommerce',
				'yaycommerce',
				array(
					'nonce'         => $this->nonce,
					'yaymail_url'   => admin_url( 'admin.php?page=yaymail-settings' ),
					'no_thank_text' => __( 'No, Thanks', 'filebird' ),
				)
			);
		}

		public function pluginInstaller( $slug ) {
			require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
			require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
			require_once ABSPATH . 'wp-admin/includes/class-wp-ajax-upgrader-skin.php';
			require_once ABSPATH . 'wp-admin/includes/class-plugin-upgrader.php';

			$api      = plugins_api(
				'plugin_information',
				array(
					'slug'   => $slug,
					'fields' => array(
						'short_description' => false,
						'sections'          => false,
						'requires'          => false,
						'rating'            => false,
						'ratings'           => false,
						'downloaded'        => false,
						'last_updated'      => false,
						'added'             => false,
						'tags'              => false,
						'compatibility'     => false,
						'homepage'          => false,
						'donate_link'       => false,
					),
				)
			);
			$skin     = new \WP_Ajax_Upgrader_Skin();
			$upgrader = new \Plugin_Upgrader( $skin );
			try {
				$result = $upgrader->install( $api->download_link );

				if ( is_wp_error( $result ) ) {
					throw new \Exception( $result->get_error_message() );
				}

				return true;
			} catch ( \Exception $e ) {
				throw new \Exception( $e->getMessage() );
			}

			return false;
		}

		public function ajax_install_plugin() {
			check_ajax_referer( 'install-plugin_yaymail', 'nonce', true );

			$installed = $this->pluginInstaller( 'yaymail' );
			if ( $installed === false ) {
				wp_send_json_error( array( 'message' => $installed ) );
			}
			try {
				$result = activate_plugin( 'yaymail/yaymail.php' );

				if ( is_wp_error( $result ) ) {
					throw new \Exception( $result->get_error_message() );
				}
				wp_send_json_success();
			} catch ( \Exception $e ) {
				throw new \Exception( $e->getMessage() );
			}
		}

		public function ajax_dismiss_plugin() {
			check_ajax_referer( 'install-plugin_yaymail', 'nonce', true );
			$type = sanitize_text_field( $_POST['type'] );
			if ( 'popup' == $type ) {
				update_option( 'yaymail_popup_sale', 1 );
			}
			if ( 'noti' == $type ) {
				update_option( 'yaymail_noti_sale', 1 );
			}
			wp_send_json_success();
		}

		public function footer() {
			?>
			<script>
				jQuery(document).ready(function() {
					const $link = jQuery('#toplevel_page_woocommerce a[href="admin.php?page=install_yaymail_plugin"]')
					$link.attr('href', "<?php echo esc_url( $this->pluginUrl ); ?>")
					$link.attr('aria-label', 'More information about YayMail')
					$link.attr('data-title', 'YayMail')
					$link.addClass("thickbox open-plugin-details-modal")
					$link.on('click', function(){
						setTimeout(() => {
							jQuery('#TB_window').addClass('plugin-details-modal')
						}, 300);
					})
				})
			</script>
			<style>
				#njt-yaycommerce:before{
					margin: 8px 5px 0 -2px;
					color: #d63638;
					transition: all .25s linear;
				}
				#njt-yc-popup-no-thank{
					padding: 0 14px;
					color: #50575e;
					line-height: 2.71428571;
					font-size: 14px;
					vertical-align: middle;
					min-height: 40px;
					text-decoration: none;
					text-shadow: none;
					margin-bottom: 4px;
					box-shadow: none;
				}
				
				#njt-yc-noti-dismiss{
					margin-left: 10px;
					text-decoration: none;
				}

				.njt-yc-wrapper{
					padding: 5px 0 10px;
				}
			</style>
			<?php
		}

		public function settingsPage() {
			if ( empty( $_GET['page'] ) ) {
				return;
			}

			if ( 'install_yaymail_plugin' === $_GET['page'] && $this->userCanInstallPlugin ) {
				wp_redirect( $this->autoInstallUrl );
				die;
			}
		}

		public function template_column_action( $row ) {
			if ( in_array(
				$row->id,
				array(
					'new_order',
					'cancelled_order',
					'failed_order',
					'customer_on_hold_order',
					'customer_processing_order',
					'customer_completed_order',
					'customer_refunded_order',
					'customer_invoice',
					'customer_note',
					'customer_reset_password',
					'customer_new_account',
				)
			) ) {
				?>
				<td class="wc-email-settings-table-template">
					<a href="<?php echo esc_url( $this->pluginUrl ); ?>" aria-label="More information about YayMail" data-title="YayMail" class="button thickbox open-plugin-details-modal"><?php echo esc_html( __( 'Customize with YayMail', 'filebird' ) ); ?></a>
				</td>
				<?php
			} else {
				echo '<td></td>';
			}
		}

		public function template_column_filter( $columns ) {
			if ( isset( $columns['actions'] ) ) {
				$actionColumn = $columns['actions'];
				unset( $columns['actions'] );
				$columns['template'] = '';
				$columns['actions']  = $actionColumn;
			}
			return $columns;
		}

		public function notification() {
			if ( function_exists( 'get_current_screen' ) ) {
				$screen = get_current_screen();
				if ( ! in_array( $screen->id, array( 'woocommerce_page_wc-settings', 'woocommerce_page_wc-addons' ) ) ) {
					return;
				}
			} else {
				return;
			}

			?>
				<div class="notice notice-info is-dismissible" id="njt-yc">
					<div class="njt-yc-wrapper">
					<h3><?php _e( 'Email Customizer for WooCommerce', 'filebird' ); ?></h3>
					<p style="margin: 17px 0"><?php _e( 'YayMail helps you easily customize your WooCommerce emails with email builder. Try it today!', 'filebird' ); ?></p>
					<p>
						<a href="<?php echo esc_url( $this->userCanInstallPlugin ? $this->autoInstallUrl : $this->pluginUrl ); ?>" aria-label="More information about YayMail" data-title="YayMail" class="button button-primary <?php echo esc_attr( $this->userCanInstallPlugin ? '' : 'thickbox open-plugin-details-modal' ); ?>"><?php _e( 'Install for Free', 'filebird' ); ?></a>
						<a href="javascript:;" id="njt-yc-noti-dismiss"><?php _e( 'No, Thanks', 'filebird' ); ?></a>
					</p>
					</div>
				</div>
			<?php
		}
	}

	new YayCommerce();
}
