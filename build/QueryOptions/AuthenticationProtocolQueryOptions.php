<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationProtocol resources
 *
 * Available select fields:
 */
class AuthenticationProtocolQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationProtocol
     */

    /**
     * Select specific AuthenticationProtocol properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
