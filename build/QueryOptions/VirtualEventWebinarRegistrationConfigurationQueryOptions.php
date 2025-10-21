<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventWebinarRegistrationConfiguration resources
 *
 * Available select fields:
 */
class VirtualEventWebinarRegistrationConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventWebinarRegistrationConfiguration
     */

    /**
     * Select specific VirtualEventWebinarRegistrationConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
