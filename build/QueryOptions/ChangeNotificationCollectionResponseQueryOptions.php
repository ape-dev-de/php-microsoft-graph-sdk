<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChangeNotificationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ChangeNotificationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ChangeNotificationCollectionResponse properties
     * 
     * @param array<string> $select Use ChangeNotificationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
