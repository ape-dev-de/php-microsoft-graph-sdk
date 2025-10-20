<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintService resources
 *
 * Available select fields:
 * - endpoints
 */
class PrintServiceQueryOptions extends QueryOptions
{
    public const FIELD_ENDPOINTS = 'endpoints';

    /**
     * Select specific PrintService properties
     * 
     * @param array<string> $select Use PrintServiceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
