<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppTroubleshootingEventCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MobileAppTroubleshootingEventCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MobileAppTroubleshootingEventCollectionResponse properties
     * 
     * @param array<string> $select Use MobileAppTroubleshootingEventCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
