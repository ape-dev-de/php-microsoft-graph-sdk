<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodFeatureConfiguration
 */
class AuthenticationMethodFeatureConfiguration
{
    /**
     * A single entity that is excluded from this feature.
     */
    private ?string $excludeTarget;

    /**
     * A single entity that is included in this feature.
     */
    private ?string $includeTarget;

    /**
     * Enable or disable the feature. Possible values are: default, enabled, disabled, unknownFutureValue. The default value is used when the configuration hasn''t been explicitly set and uses the default behavior of Microsoft Entra ID for the setting. The default value is disabled.
     */
    private ?string $state;

    public function getExcludeTarget(): ?string
    {
        return $this->excludeTarget;
    }

    public function setExcludeTarget(?string $excludeTarget): self
    {
        $this->excludeTarget = $excludeTarget;
        return $this;
    }

    public function getIncludeTarget(): ?string
    {
        return $this->includeTarget;
    }

    public function setIncludeTarget(?string $includeTarget): self
    {
        $this->includeTarget = $includeTarget;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

}
