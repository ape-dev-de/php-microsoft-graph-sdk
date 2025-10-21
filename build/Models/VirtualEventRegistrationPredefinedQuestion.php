<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationPredefinedQuestion
 */
class VirtualEventRegistrationPredefinedQuestion
{
    public function __construct(
        /** Label of the predefined registration question. It accepts a single line of text: street, city, state, postalCode, countryOrRegion, industry, jobTitle, organization, and unknownFutureValue. */
        public ?string $label = null
    ) {}
}
