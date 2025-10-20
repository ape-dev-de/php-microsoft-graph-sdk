<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingStaffMemberCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingStaffMemberCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingStaffMemberCollectionResponse properties
     * 
     * @param array<string> $select Use BookingStaffMemberCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
