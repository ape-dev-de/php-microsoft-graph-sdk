<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidManagedAppRegistration resources
 *
 * Available select fields:
 */
class AndroidManagedAppRegistrationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidManagedAppRegistration
     */

    /**
     * Select specific AndroidManagedAppRegistration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
