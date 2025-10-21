<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * KeyCredentialConfiguration
 */
class KeyCredentialConfiguration
{
    public function __construct(
        /** String value that indicates the maximum lifetime for key expiration, defined as an ISO 8601 duration. For example, P4DT12H30M5S represents four days, 12 hours, 30 minutes, and five seconds. This property is required when restrictionType is set to keyLifetime. */
        public ?string $maxLifetime = null,
        /** Specifies the date from which the policy restriction applies to newly created applications. For existing applications, the enforcement date can be retroactively applied. */
        public ?\DateTimeInterface $restrictForAppsCreatedAfterDateTime = null,
        /** The type of restriction being applied. Possible values are asymmetricKeyLifetime, and unknownFutureValue. Each value of restrictionType can be used only once per policy. */
        public ?string $restrictionType = null,
        /**  */
        public ?string $state = null
    ) {}
}
