<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostPortProtocol resources
 *
 * Available select fields:
 */
class SecurityHostPortProtocolQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostPortProtocol
     */

    /**
     * Select specific SecurityHostPortProtocol properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
