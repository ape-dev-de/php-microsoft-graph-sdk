<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreLocalizedName
 */
class TermStoreLocalizedName
{
    public function __construct(
        /** The language tag for the label. */
        public ?string $languageTag = null,
        /** The name in the localized language. */
        public ?string $name = null
    ) {}
}
