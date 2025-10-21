<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationStrengthRequirements resources
 *
 * Available select fields:
 */
class AuthenticationStrengthRequirementsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationStrengthRequirements
     */

    /**
     * Select specific AuthenticationStrengthRequirements properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
