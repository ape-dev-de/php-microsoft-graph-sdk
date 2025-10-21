<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmergencyCallerInfo
 */
class EmergencyCallerInfo
{
    public function __construct(
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?Location $location = null,
        /**  */
        public ?string $phoneNumber = null,
        /**  */
        public ?string $tenantId = null,
        /**  */
        public ?string $upn = null
    ) {}
}
