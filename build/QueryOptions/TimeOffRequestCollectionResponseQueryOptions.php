<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeOffRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TimeOffRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TimeOffRequestCollectionResponse properties
     * 
     * @param array<string> $select Use TimeOffRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
