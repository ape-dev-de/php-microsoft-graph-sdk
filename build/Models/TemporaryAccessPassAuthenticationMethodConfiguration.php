<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TemporaryAccessPassAuthenticationMethodConfiguration
 */
class TemporaryAccessPassAuthenticationMethodConfiguration
{
    /**
     * Default length in characters of a Temporary Access Pass object. Must be between 8 and 48 characters.
     */
    private ?float $defaultLength;

    /**
     * Default lifetime in minutes for a Temporary Access Pass. Value can be any integer between the minimumLifetimeInMinutes and maximumLifetimeInMinutes.
     */
    private ?float $defaultLifetimeInMinutes;

    /**
     * If true, all the passes in the tenant will be restricted to one-time use. If false, passes in the tenant can be created to be either one-time use or reusable.
     */
    private ?bool $isUsableOnce;

    /**
     * Maximum lifetime in minutes for any Temporary Access Pass created in the tenant. Value can be between 10 and 43200 minutes (equivalent to 30 days).
     */
    private ?float $maximumLifetimeInMinutes;

    /**
     * Minimum lifetime in minutes for any Temporary Access Pass created in the tenant. Value can be between 10 and 43200 minutes (equivalent to 30 days).
     */
    private ?float $minimumLifetimeInMinutes;

    /**
     * A collection of groups that are enabled to use the authentication method.
     * @var string[]
     */
    private array $includeTargets = [];


    public function getDefaultLength(): ?float
    {
        return $this->defaultLength;
    }

    public function setDefaultLength(?float $defaultLength): self
    {
        $this->defaultLength = $defaultLength;
        return $this;
    }

    public function getDefaultLifetimeInMinutes(): ?float
    {
        return $this->defaultLifetimeInMinutes;
    }

    public function setDefaultLifetimeInMinutes(?float $defaultLifetimeInMinutes): self
    {
        $this->defaultLifetimeInMinutes = $defaultLifetimeInMinutes;
        return $this;
    }

    public function getIsUsableOnce(): ?bool
    {
        return $this->isUsableOnce;
    }

    public function setIsUsableOnce(?bool $isUsableOnce): self
    {
        $this->isUsableOnce = $isUsableOnce;
        return $this;
    }

    public function getMaximumLifetimeInMinutes(): ?float
    {
        return $this->maximumLifetimeInMinutes;
    }

    public function setMaximumLifetimeInMinutes(?float $maximumLifetimeInMinutes): self
    {
        $this->maximumLifetimeInMinutes = $maximumLifetimeInMinutes;
        return $this;
    }

    public function getMinimumLifetimeInMinutes(): ?float
    {
        return $this->minimumLifetimeInMinutes;
    }

    public function setMinimumLifetimeInMinutes(?float $minimumLifetimeInMinutes): self
    {
        $this->minimumLifetimeInMinutes = $minimumLifetimeInMinutes;
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
