<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkforceIntegrationEncryption
 */
class WorkforceIntegrationEncryption
{
    /**
     * Possible values are: sharedSecret, unknownFutureValue.
     */
    private ?string $protocol;

    /**
     * Encryption shared secret.
     */
    private ?string $secret;


    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    public function setProtocol(?string $protocol): self
    {
        $this->protocol = $protocol;
        return $this;
    }

    public function getSecret(): ?string
    {
        return $this->secret;
    }

    public function setSecret(?string $secret): self
    {
        $this->secret = $secret;
        return $this;
    }

}
