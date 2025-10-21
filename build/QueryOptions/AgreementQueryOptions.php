<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Agreement resources
 *
 * Available select fields:
 */
class AgreementQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Agreement
     */

    /**
     * Select specific Agreement properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
