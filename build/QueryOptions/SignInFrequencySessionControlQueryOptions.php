<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SignInFrequencySessionControl resources
 *
 * Available select fields:
 */
class SignInFrequencySessionControlQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SignInFrequencySessionControl
     */

    /**
     * Select specific SignInFrequencySessionControl properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
