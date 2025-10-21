<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreLocalizedLabel
 */
class TermStoreLocalizedLabel
{
    public function __construct(
        /** Indicates whether the label is the default label. */
        public ?bool $isDefault = null,
        /** The language tag for the label. */
        public ?string $languageTag = null,
        /** The name of the label. */
        public ?string $name = null
    ) {}
}
