<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppRegistration resources
 *
 * Available select fields:
 */
class ManagedAppRegistrationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppRegistration
     */

    /**
     * Select specific ManagedAppRegistration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
