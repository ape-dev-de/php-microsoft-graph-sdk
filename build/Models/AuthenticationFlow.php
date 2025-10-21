<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationFlow
 */
class AuthenticationFlow
{
    /**
     * Represents the transfer methods in scope for the policy. The possible values are: none, deviceCodeFlow, authenticationTransfer, unknownFutureValue. Default value is none.
     */
    private ?string $transferMethod;


    public function getTransferMethod(): ?string
    {
        return $this->transferMethod;
    }

    public function setTransferMethod(?string $transferMethod): self
    {
        $this->transferMethod = $transferMethod;
        return $this;
    }

}
