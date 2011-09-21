<?php defined('SYSPATH') or die('No direct script access.');

	class Kohana_Mailer_Transport_Postmark extends Kohana_Mailer_Transport {

		public function build ( $config ) {
			require_once Kohana::find_file( 'vendor', 'postmark_swiftmailer/postmark_swiftmailer' );
			return Swift_PostmarkTransport::newInstance( $config['api-key'] );
		}

	}

