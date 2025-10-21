<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TokenMeetingInfo
 */
class TokenMeetingInfo
{
    /**
     * The token used to join the call.
     */
    private ?string $token;


    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;
        return $this;
    }

}
