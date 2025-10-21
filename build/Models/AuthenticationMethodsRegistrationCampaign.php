<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodsRegistrationCampaign
 */
class AuthenticationMethodsRegistrationCampaign
{
    /**
     * Users and groups of users that are excluded from being prompted to set up the authentication method.
     */
    private array $excludeTargets = [];

    /**
     * Users and groups of users that are prompted to set up the authentication method.
     */
    private array $includeTargets = [];

    /**
     * Specifies the number of days that the user sees a prompt again if they select ''Not now'' and snoozes the prompt. Minimum: 0 days. Maximum: 14 days. If the value is ''0'', the user is prompted during every MFA attempt.
     */
    private ?float $snoozeDurationInDays;

    /**
     */
    private ?string $state;


    public function getExcludeTargets(): array
    {
        return $this->excludeTargets;
    }

    public function setExcludeTargets(array $excludeTargets): self
    {
        $this->excludeTargets = $excludeTargets;
        return $this;
    }

    public function getIncludeTargets(): array
    {
        return $this->includeTargets;
    }

    public function setIncludeTargets(array $includeTargets): self
    {
        $this->includeTargets = $includeTargets;
        return $this;
    }

    public function getSnoozeDurationInDays(): ?float
    {
        return $this->snoozeDurationInDays;
    }

    public function setSnoozeDurationInDays(?float $snoozeDurationInDays): self
    {
        $this->snoozeDurationInDays = $snoozeDurationInDays;
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
