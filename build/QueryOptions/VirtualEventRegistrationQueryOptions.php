<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistration resources
 *
 * Available select fields:
 */
class VirtualEventRegistrationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventRegistration
     */

    /**
     * Select specific VirtualEventRegistration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
