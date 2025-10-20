<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalculatedColumn resources
 *
 * Available select fields:
 * - format
 * - formula
 * - outputType
 */
class CalculatedColumnQueryOptions extends QueryOptions
{
    public const FIELD_FORMAT = 'format';
    public const FIELD_FORMULA = 'formula';
    public const FIELD_OUTPUT_TYPE = 'outputType';

    /**
     * Select specific CalculatedColumn properties
     * 
     * @param array<string> $select Use CalculatedColumnQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
