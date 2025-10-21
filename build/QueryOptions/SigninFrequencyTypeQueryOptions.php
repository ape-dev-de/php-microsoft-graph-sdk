<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SigninFrequencyType resources
 *
 * Available select fields:
 */
class SigninFrequencyTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SigninFrequencyType
     */

    /**
     * Select specific SigninFrequencyType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
