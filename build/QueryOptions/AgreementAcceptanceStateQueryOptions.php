<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AgreementAcceptanceState resources
 *
 * Available select fields:
 */
class AgreementAcceptanceStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AgreementAcceptanceState
     */

    /**
     * Select specific AgreementAcceptanceState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
