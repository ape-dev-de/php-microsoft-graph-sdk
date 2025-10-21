<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityContainerPortProtocol resources
 *
 * Available select fields:
 */
class SecurityContainerPortProtocolQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityContainerPortProtocol
     */

    /**
     * Select specific SecurityContainerPortProtocol properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
