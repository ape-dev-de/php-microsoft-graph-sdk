<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcOnPremisesConnectionHealthCheckErrorType resources
 *
 * Available select fields:
 */
class CloudPcOnPremisesConnectionHealthCheckErrorTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcOnPremisesConnectionHealthCheckErrorType
     */

    /**
     * Select specific CloudPcOnPremisesConnectionHealthCheckErrorType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
