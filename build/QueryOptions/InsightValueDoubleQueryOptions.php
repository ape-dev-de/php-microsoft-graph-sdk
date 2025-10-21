<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InsightValueDouble resources
 *
 * Available select fields:
 * - value
 */
class InsightValueDoubleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InsightValueDouble
     */
    public const FIELD_VALUE = 'value';

    /**
     * Select specific InsightValueDouble properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
