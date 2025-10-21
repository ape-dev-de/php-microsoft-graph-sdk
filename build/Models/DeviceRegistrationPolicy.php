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
        public ?string $azureADJoin = null,
        /**  */
        public ?string $azureADRegistration = null,
        /**  */
        public ?string $description = null,
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?string $localAdminPassword = null,
        /**  */
        public ?string $multiFactorAuthConfiguration = null,
        /**  */
        public ?float $userDeviceQuota = null
    ) {}
}
