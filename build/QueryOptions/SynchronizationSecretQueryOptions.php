<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationSecret resources
 *
 * Available select fields:
 */
class SynchronizationSecretQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationSecret
     */

    /**
     * Select specific SynchronizationSecret properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
