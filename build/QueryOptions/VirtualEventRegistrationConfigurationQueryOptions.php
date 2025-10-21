<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistrationConfiguration resources
 *
 * Available select fields:
 */
class VirtualEventRegistrationConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventRegistrationConfiguration
     */

    /**
     * Select specific VirtualEventRegistrationConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
