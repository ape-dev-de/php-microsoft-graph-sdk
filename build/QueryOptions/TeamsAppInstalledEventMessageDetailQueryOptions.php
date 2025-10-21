<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppInstalledEventMessageDetail resources
 *
 * Available select fields:
 */
class TeamsAppInstalledEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAppInstalledEventMessageDetail
     */

    /**
     * Select specific TeamsAppInstalledEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
