<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingStaffMemberBaseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingStaffMemberBaseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingStaffMemberBaseCollectionResponse properties
     * 
     * @param array<string> $select Use BookingStaffMemberBaseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
