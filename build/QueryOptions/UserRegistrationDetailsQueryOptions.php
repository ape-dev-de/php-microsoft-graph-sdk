<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserRegistrationDetails resources
 *
 * Available select fields:
 */
class UserRegistrationDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserRegistrationDetails
     */

    /**
     * Select specific UserRegistrationDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
