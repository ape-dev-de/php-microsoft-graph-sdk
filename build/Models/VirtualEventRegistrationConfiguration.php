<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationConfiguration
 */
class VirtualEventRegistrationConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Total capacity of the virtual event. */
        public ?float $capacity = null,
        /** Registration URL of the virtual event. */
        public ?string $registrationWebUrl = null,
        /** Registration questions. */
        public array $questions = []
    ) {}
}
