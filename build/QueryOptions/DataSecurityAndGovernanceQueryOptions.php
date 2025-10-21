<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DataSecurityAndGovernance resources
 *
 * Available select fields:
 * - sensitivityLabels
 */
class DataSecurityAndGovernanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DataSecurityAndGovernance
     */
    public const FIELD_SENSITIVITY_LABELS = 'sensitivityLabels';

    /**
     * Select specific DataSecurityAndGovernance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
