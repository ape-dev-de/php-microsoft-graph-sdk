<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnEmailOtpSendListener
 */
class OnEmailOtpSendListener
{
    public function __construct(
        /** Used to configure what to invoke if the onEmailOTPSend event resolves to this listener. This base class serves as a generic OTP event handler used for both email and SMS OTP messages. */
        public ?string $handler = null
    ) {}
}
