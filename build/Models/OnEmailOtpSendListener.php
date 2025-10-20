<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnEmailOtpSendListener
 */
class OnEmailOtpSendListener
{
    /**
     * Used to configure what to invoke if the onEmailOTPSend event resolves to this listener. This base class serves as a generic OTP event handler used for both email and SMS OTP messages.
     */
    private ?string $handler;

    public function getHandler(): ?string
    {
        return $this->handler;
    }

    public function setHandler(?string $handler): self
    {
        $this->handler = $handler;
        return $this;
    }

}
