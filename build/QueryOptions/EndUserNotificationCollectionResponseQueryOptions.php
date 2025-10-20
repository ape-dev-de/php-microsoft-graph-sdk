<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EndUserNotificationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EndUserNotificationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EndUserNotificationCollectionResponse properties
     * 
     * @param array<string> $select Use EndUserNotificationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
