<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmergencyCallEvent
 */
class EmergencyCallEvent
{
    public function __construct(
        /**  */
        public ?string $callerInfo = null,
        /**  */
        public ?string $emergencyNumberDialed = null,
        /**  */
        public ?string $policyName = null
    ) {}
}
