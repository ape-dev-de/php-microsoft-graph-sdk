<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosUpdatesInstallStatus resources
 *
 * Available select fields:
 */
class IosUpdatesInstallStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosUpdatesInstallStatus
     */

    /**
     * Select specific IosUpdatesInstallStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
