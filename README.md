# Postmark for Mailer

This is a postmark plugin for Kohana 3's [Mailer module](https://github.com/themusicman/Mailer).

Currently Mailer is not patched to use dynamic transports, so you will need to use [my fork](https://github.com/jmhobbs/Mailer).

## Usage

In your <tt>config/mailer.php</tt> use the <tt>postmark</tt> transport:


    return array (
      'default' => array (
        'transport'	=> 'postmark',
        'options'	=> array (
          'api-key'	=> 'YOUR-API-KEY-HERE',
        ),
      )
    );

Now just use Mailer like normal.

