<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationPredefinedQuestion
 */
class VirtualEventRegistrationPredefinedQuestion
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Display name of the registration question. */
        public ?string $displayName = null,
        /** Indicates whether an answer to the question is required. The default value is false. */
        public ?string $isRequired = null,
        /** Label of the predefined registration question. It accepts a single line of text: street, city, state, postalCode, countryOrRegion, industry, jobTitle, organization, and unknownFutureValue. */
        public ?string $label = null
    ) {}
}
