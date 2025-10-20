<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileThreatDefenseConnectorCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MobileThreatDefenseConnectorCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MobileThreatDefenseConnectorCollectionResponse properties
     * 
     * @param array<string> $select Use MobileThreatDefenseConnectorCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
