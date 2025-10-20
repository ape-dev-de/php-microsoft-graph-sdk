<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * KeyCredentialConfiguration
 */
class KeyCredentialConfiguration
{
    /**
     * String value that indicates the maximum lifetime for key expiration, defined as an ISO 8601 duration. For example, P4DT12H30M5S represents four days, 12 hours, 30 minutes, and five seconds. This property is required when restrictionType is set to keyLifetime.
     */
    private ?string $maxLifetime;

    /**
     * Specifies the date from which the policy restriction applies to newly created applications. For existing applications, the enforcement date can be retroactively applied.
     */
    private ?\DateTimeInterface $restrictForAppsCreatedAfterDateTime;

    /**
     * The type of restriction being applied. Possible values are asymmetricKeyLifetime, and unknownFutureValue. Each value of restrictionType can be used only once per policy.
     */
    private ?string $restrictionType;

    /**
     */
    private ?string $state;

    public function getMaxLifetime(): ?string
    {
        return $this->maxLifetime;
    }

    public function setMaxLifetime(?string $maxLifetime): self
    {
        $this->maxLifetime = $maxLifetime;
        return $this;
    }

    public function getRestrictForAppsCreatedAfterDateTime(): ?\DateTimeInterface
    {
        return $this->restrictForAppsCreatedAfterDateTime;
    }

    public function setRestrictForAppsCreatedAfterDateTime(?\DateTimeInterface $restrictForAppsCreatedAfterDateTime): self
    {
        $this->restrictForAppsCreatedAfterDateTime = $restrictForAppsCreatedAfterDateTime;
        return $this;
    }

    public function getRestrictionType(): ?string
    {
        return $this->restrictionType;
    }

    public function setRestrictionType(?string $restrictionType): self
    {
        $this->restrictionType = $restrictionType;
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
