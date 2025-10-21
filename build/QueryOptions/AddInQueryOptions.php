<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AddIn resources
 *
 * Available select fields:
 * - id
 * - properties
 * - type
 */
class AddInQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AddIn
     */
    public const FIELD_ID = 'id';
    public const FIELD_PROPERTIES = 'properties';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific AddIn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
