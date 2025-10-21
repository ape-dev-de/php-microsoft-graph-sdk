<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SignInFrequencyInterval resources
 *
 * Available select fields:
 */
class SignInFrequencyIntervalQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SignInFrequencyInterval
     */

    /**
     * Select specific SignInFrequencyInterval properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
