<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreLocalizedDescription
 */
class TermStoreLocalizedDescription
{
    public function __construct(
        /** The description in the localized language. */
        public ?string $description = null,
        /** The language tag for the label. */
        public ?string $languageTag = null
    ) {}
}
