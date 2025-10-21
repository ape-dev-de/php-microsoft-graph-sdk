<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ColumnValidation
 */
class ColumnValidation
{
    public function __construct(
        /** Default BCP 47 language tag for the description. */
        public ?string $defaultLanguage = null,
        /** Localized messages that explain what is needed for this column's value to be considered valid. User will be prompted with this message if validation fails. */
        public array $descriptions = [],
        /** The formula to validate column value. For examples, see Examples of common formulas in lists. */
        public ?string $formula = null
    ) {}
}
