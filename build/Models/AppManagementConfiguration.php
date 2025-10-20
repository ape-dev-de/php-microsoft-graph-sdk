<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppManagementConfiguration
 */
class AppManagementConfiguration
{
    /**
     * Collection of keyCredential restrictions settings to be applied to an application or service principal.
     */
    private array $keyCredentials = [];

    /**
     * Collection of password restrictions settings to be applied to an application or service principal.
     */
    private ?string $passwordCredentials;

    public function getKeyCredentials(): array
    {
        return $this->keyCredentials;
    }

    public function setKeyCredentials(array $keyCredentials): self
    {
        $this->keyCredentials = $keyCredentials;
        return $this;
    }

    public function getPasswordCredentials(): ?string
    {
        return $this->passwordCredentials;
    }

    public function setPasswordCredentials(?string $passwordCredentials): self
    {
        $this->passwordCredentials = $passwordCredentials;
        return $this;
    }

}
