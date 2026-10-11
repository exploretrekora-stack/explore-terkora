<?php

namespace App\Mail;

use Illuminate\Mail\MailManager;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Symfony\Component\Mailer\Transport\Smtp\Stream\SocketStream;

class SmtpMailManager extends MailManager
{
    /**
     * Allow STARTTLS on the configured host. Its Diffie-Hellman key is smaller than OpenSSL's default security level.
     */
    protected function configureSmtpTransport(EsmtpTransport $transport, array $config): EsmtpTransport
    {
        $transport = parent::configureSmtpTransport($transport, $config);

        $stream = $transport->getStream();

        if ($stream instanceof SocketStream) {
            $options = $stream->getStreamOptions();
            $options['ssl']['security_level'] = 1;
            $options['ssl']['ciphers'] = 'DEFAULT@SECLEVEL=1';
            $stream->setStreamOptions($options);
        }

        return $transport;
    }
}
