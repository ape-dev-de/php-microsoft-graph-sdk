<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAuthenticatorAuthenticationMethodConfiguration
 */
class MicrosoftAuthenticatorAuthenticationMethodConfiguration
{
    /**
     * A collection of Microsoft Authenticator settings such as application context and location context, and whether they are enabled for all users or specific users only.
     */
    private ?string $featureSettings;

    /**
     */
    private ?bool $isSoftwareOathEnabled;

    /**
     * A collection of groups that are enabled to use the authentication method. Expanded by default.
     * @var string[]
     */
    private array $includeTargets = [];


    public function getFeatureSettings(): ?string
    {
        return $this->featureSettings;
    }

    public function setFeatureSettings(?string $featureSettings): self
    {
        $this->featureSettings = $featureSettings;
        return $this;
    }

    public function getIsSoftwareOathEnabled(): ?bool
    {
        return $this->isSoftwareOathEnabled;
    }

    public function setIsSoftwareOathEnabled(?bool $isSoftwareOathEnabled): self
    {
        $this->isSoftwareOathEnabled = $isSoftwareOathEnabled;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIncludeTargets(): array
    {
        return $this->includeTargets;
    }

    /**
     * @param string[] $includeTargets
     */
    public function setIncludeTargets(array $includeTargets): self
    {
        $this->includeTargets = $includeTargets;
        return $this;
    }

}
