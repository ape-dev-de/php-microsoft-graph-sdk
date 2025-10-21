<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PublicKeyInfrastructureRoot resources
 *
 * Available select fields:
 */
class PublicKeyInfrastructureRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PublicKeyInfrastructureRoot
     */

    /**
     * Select specific PublicKeyInfrastructureRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
