<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceRegistrationPolicy
 */
class DeviceRegistrationPolicy
{
    public function __construct(
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
        public ?string $userDeviceQuota = null
    ) {}
}
