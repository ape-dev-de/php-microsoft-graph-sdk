<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommsNotificationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CommsNotificationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CommsNotificationCollectionResponse properties
     * 
     * @param array<string> $select Use CommsNotificationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
