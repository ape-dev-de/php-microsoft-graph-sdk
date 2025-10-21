<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceRegistrationPolicy
 */
class DeviceRegistrationPolicy
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?AzureADJoinPolicy $azureADJoin = null,
        /**  */
        public ?AzureADRegistrationPolicy $azureADRegistration = null,
        /**  */
        public ?string $description = null,
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?LocalAdminPasswordSettings $localAdminPassword = null,
        /**  */
        public ?MultiFactorAuthConfiguration $multiFactorAuthConfiguration = null,
        /**  */
        public ?float $userDeviceQuota = null
    ) {}
}
