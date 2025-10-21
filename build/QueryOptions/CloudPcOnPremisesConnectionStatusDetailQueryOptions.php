<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcOnPremisesConnectionStatusDetail resources
 *
 * Available select fields:
 * - endDateTime
 * - healthChecks
 * - startDateTime
 */
class CloudPcOnPremisesConnectionStatusDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcOnPremisesConnectionStatusDetail
     */
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_HEALTH_CHECKS = 'healthChecks';
    public const FIELD_START_DATE_TIME = 'startDateTime';

    /**
     * Select specific CloudPcOnPremisesConnectionStatusDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
