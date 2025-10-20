<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosNotificationSettingsCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosNotificationSettingsCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosNotificationSettingsCollectionResponse properties
     * 
     * @param array<string> $select Use IosNotificationSettingsCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
