<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventWebinarRegistrationConfiguration
 */
class VirtualEventWebinarRegistrationConfiguration
{
    public function __construct(
        /**  */
        public ?bool $isManualApprovalEnabled = null,
        /**  */
        public ?string $isWaitlistEnabled = null
    ) {}
}
