<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RequiredPasswordType resources
 *
 * Available select fields:
 */
class RequiredPasswordTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RequiredPasswordType
     */

    /**
     * Select specific RequiredPasswordType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
