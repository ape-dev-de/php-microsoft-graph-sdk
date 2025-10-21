<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventWebinarRegistrationConfiguration
 */
class VirtualEventWebinarRegistrationConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Total capacity of the virtual event. */
        public ?float $capacity = null,
        /** Registration URL of the virtual event. */
        public ?string $registrationWebUrl = null,
        /** Registration questions. */
        public array $questions = [],
        /**  */
        public ?bool $isManualApprovalEnabled = null,
        /**  */
        public ?bool $isWaitlistEnabled = null
    ) {}
}
