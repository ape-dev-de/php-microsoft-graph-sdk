<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileThreatDefenseConnector resources
 *
 * Available select fields:
 */
class MobileThreatDefenseConnectorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileThreatDefenseConnector
     */

    /**
     * Select specific MobileThreatDefenseConnector properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
