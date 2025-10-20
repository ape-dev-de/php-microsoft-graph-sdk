<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LocalizedNotificationMessageCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class LocalizedNotificationMessageCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific LocalizedNotificationMessageCollectionResponse properties
     * 
     * @param array<string> $select Use LocalizedNotificationMessageCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
