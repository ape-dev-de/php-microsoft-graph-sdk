<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlternativeSecurityId
 */
class AlternativeSecurityId
{
    /**
     * For internal use only.
     */
    private ?string $identityProvider;

    /**
     * For internal use only.
     */
    private ?string $key;

    /**
     * For internal use only.
     */
    private ?string $type;


    public function getIdentityProvider(): ?string
    {
        return $this->identityProvider;
    }

    public function setIdentityProvider(?string $identityProvider): self
    {
        $this->identityProvider = $identityProvider;
        return $this;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
