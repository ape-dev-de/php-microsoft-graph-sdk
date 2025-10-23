<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PasswordCredentialConfiguration
 */
class PasswordCredentialConfiguration
{
    /** String value that indicates the maximum lifetime for password expiration, defined as an ISO 8601 duration. For example, P4DT12H30M5S represents four days, 12 hours, 30 minutes, and five seconds. This property is required when restrictionType is set to passwordLifetime. */
    public ?string $maxLifetime = null;

    /** Specifies the date from which the policy restriction applies to newly created applications. For existing applications, the enforcement date can be retroactively applied. */
    public ?\DateTimeInterface $restrictForAppsCreatedAfterDateTime = null;

    /** 
     * The type of restriction being applied. The possible values are: passwordAddition, passwordLifetime, symmetricKeyAddition, symmetricKeyLifetime, customPasswordAddition, and unknownFutureValue. Each value of restrictionType can be used only once per policy.
     * @var AppCredentialRestrictionType|\stdClass|null
     */
    public mixed $restrictionType = null;

    /**  */
    public ?AppManagementRestrictionState $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['maxLifetime'])) {
            $this->maxLifetime = $data['maxLifetime'];
        }
        if (isset($data['restrictForAppsCreatedAfterDateTime'])) {
            $this->restrictForAppsCreatedAfterDateTime = is_string($data['restrictForAppsCreatedAfterDateTime']) ? new \DateTimeImmutable($data['restrictForAppsCreatedAfterDateTime']) : $data['restrictForAppsCreatedAfterDateTime'];
        }
        if (isset($data['restrictionType'])) {
            $this->restrictionType = is_array($data['restrictionType']) ? new AppCredentialRestrictionType($data['restrictionType']) : $data['restrictionType'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new AppManagementRestrictionState($data['state']) : $data['state'];
        }
    }
}
