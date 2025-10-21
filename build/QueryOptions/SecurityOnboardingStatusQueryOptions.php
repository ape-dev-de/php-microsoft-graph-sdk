<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityOnboardingStatus resources
 *
 * Available select fields:
 */
class SecurityOnboardingStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityOnboardingStatus
     */

    /**
     * Select specific SecurityOnboardingStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
