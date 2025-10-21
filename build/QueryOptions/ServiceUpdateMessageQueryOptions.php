<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceUpdateMessage resources
 *
 * Available select fields:
 */
class ServiceUpdateMessageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceUpdateMessage
     */

    /**
     * Select specific ServiceUpdateMessage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
