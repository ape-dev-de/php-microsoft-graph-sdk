<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppInstallation resources
 *
 * Available select fields:
 */
class TeamsAppInstallationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAppInstallation
     */

    /**
     * Select specific TeamsAppInstallation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
