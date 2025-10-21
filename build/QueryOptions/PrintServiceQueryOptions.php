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
    /**
     * Available select fields for PrintService
     */
    public const FIELD_ENDPOINTS = 'endpoints';

    /**
     * Select specific PrintService properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
