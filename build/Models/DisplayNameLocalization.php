<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DisplayNameLocalization
 */
class DisplayNameLocalization
{
    public function __construct(
        /** If present, the value of this field contains the displayName string that has been set for the language present in the languageTag field. */
        public ?string $displayName = null,
        /** Provides the language culture-code and friendly name of the language that the displayName field has been provided in. */
        public ?string $languageTag = null
    ) {}
}
