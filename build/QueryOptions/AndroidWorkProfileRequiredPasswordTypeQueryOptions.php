<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidWorkProfileRequiredPasswordType resources
 *
 * Available select fields:
 */
class AndroidWorkProfileRequiredPasswordTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidWorkProfileRequiredPasswordType
     */

    /**
     * Select specific AndroidWorkProfileRequiredPasswordType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
