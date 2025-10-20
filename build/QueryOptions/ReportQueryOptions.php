<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Report resources
 *
 * Available select fields:
 * - content
 */
class ReportQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT = 'content';

    /**
     * Select specific Report properties
     * 
     * @param array<string> $select Use ReportQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
