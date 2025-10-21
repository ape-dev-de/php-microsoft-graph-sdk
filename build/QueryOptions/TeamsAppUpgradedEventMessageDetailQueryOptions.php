<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppUpgradedEventMessageDetail resources
 *
 * Available select fields:
 */
class TeamsAppUpgradedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAppUpgradedEventMessageDetail
     */

    /**
     * Select specific TeamsAppUpgradedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
