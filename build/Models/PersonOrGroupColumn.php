<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PersonOrGroupColumn
 */
class PersonOrGroupColumn
{
    public function __construct(
        /** Indicates whether multiple values can be selected from the source. */
        public ?bool $allowMultipleSelection = null,
        /** Whether to allow selection of people only, or people and groups. Must be one of peopleAndGroups or peopleOnly. */
        public ?string $chooseFromType = null,
        /** How to display the information about the person or group chosen. See below. */
        public ?string $displayAs = null
    ) {}
}
