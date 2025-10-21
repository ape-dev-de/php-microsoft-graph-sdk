<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosManagedAppRegistration resources
 *
 * Available select fields:
 */
class IosManagedAppRegistrationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosManagedAppRegistration
     */

    /**
     * Select specific IosManagedAppRegistration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
