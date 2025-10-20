<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TextContent resources
 *
 * Available select fields:
 * - data
 */
class TextContentQueryOptions extends QueryOptions
{
    public const FIELD_DATA = 'data';

    /**
     * Select specific TextContent properties
     * 
     * @param array<string> $select Use TextContentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
