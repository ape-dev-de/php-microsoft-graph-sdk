<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RemoteDesktopSecurityConfiguration resources
 *
 * Available select fields:
 */
class RemoteDesktopSecurityConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RemoteDesktopSecurityConfiguration
     */

    /**
     * Select specific RemoteDesktopSecurityConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
