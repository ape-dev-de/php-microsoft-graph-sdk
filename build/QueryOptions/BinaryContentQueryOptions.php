<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BinaryContent resources
 *
 * Available select fields:
 * - data
 */
class BinaryContentQueryOptions extends QueryOptions
{
    public const FIELD_DATA = 'data';

    /**
     * Select specific BinaryContent properties
     * 
     * @param array<string> $select Use BinaryContentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
