<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidRequiredPasswordType resources
 *
 * Available select fields:
 */
class AndroidRequiredPasswordTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidRequiredPasswordType
     */

    /**
     * Select specific AndroidRequiredPasswordType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
