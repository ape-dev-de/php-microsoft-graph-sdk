<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AgreementFileProperties resources
 *
 * Available select fields:
 */
class AgreementFilePropertiesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AgreementFileProperties
     */

    /**
     * Select specific AgreementFileProperties properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
