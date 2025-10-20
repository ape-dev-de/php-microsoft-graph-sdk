<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingCustomer resources
 *
 * Available select fields:
 * - addresses
 * - createdDateTime
 * - displayName
 * - emailAddress
 * - lastUpdatedDateTime
 * - phones
 */
class BookingCustomerQueryOptions extends QueryOptions
{
    public const FIELD_ADDRESSES = 'addresses';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EMAIL_ADDRESS = 'emailAddress';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';
    public const FIELD_PHONES = 'phones';

    /**
     * Select specific BookingCustomer properties
     * 
     * @param array<string> $select Use BookingCustomerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
