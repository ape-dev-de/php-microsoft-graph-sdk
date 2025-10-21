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
    /**
     * Available select fields for Report
     */
    public const FIELD_CONTENT = 'content';

    /**
     * Select specific Report properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
