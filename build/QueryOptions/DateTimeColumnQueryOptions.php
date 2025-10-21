<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DateTimeColumn resources
 *
 * Available select fields:
 * - displayAs
 * - format
 */
class DateTimeColumnQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DateTimeColumn
     */
    public const FIELD_DISPLAY_AS = 'displayAs';
    public const FIELD_FORMAT = 'format';

    /**
     * Select specific DateTimeColumn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
