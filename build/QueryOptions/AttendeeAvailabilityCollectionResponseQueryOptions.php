<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttendeeAvailabilityCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AttendeeAvailabilityCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AttendeeAvailabilityCollectionResponse properties
     * 
     * @param array<string> $select Use AttendeeAvailabilityCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
