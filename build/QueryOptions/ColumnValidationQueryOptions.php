<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ColumnValidation resources
 *
 * Available select fields:
 * - defaultLanguage
 * - descriptions
 * - formula
 */
class ColumnValidationQueryOptions extends QueryOptions
{
    public const FIELD_DEFAULT_LANGUAGE = 'defaultLanguage';
    public const FIELD_DESCRIPTIONS = 'descriptions';
    public const FIELD_FORMULA = 'formula';

    /**
     * Select specific ColumnValidation properties
     * 
     * @param array<string> $select Use ColumnValidationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
