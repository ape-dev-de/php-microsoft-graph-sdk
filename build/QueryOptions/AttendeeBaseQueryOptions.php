<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttendeeBase resources
 *
 * Available select fields:
 * - type
 */
class AttendeeBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttendeeBase
     */
    public const FIELD_TYPE = 'type';

    /**
     * Select specific AttendeeBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
