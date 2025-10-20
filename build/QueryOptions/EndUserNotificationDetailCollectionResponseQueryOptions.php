<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EndUserNotificationDetailCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EndUserNotificationDetailCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EndUserNotificationDetailCollectionResponse properties
     * 
     * @param array<string> $select Use EndUserNotificationDetailCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
