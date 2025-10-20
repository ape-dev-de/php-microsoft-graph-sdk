<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnPremisesAccidentalDeletionPrevention resources
 *
 * Available select fields:
 * - alertThreshold
 * - synchronizationPreventionType
 */
class OnPremisesAccidentalDeletionPreventionQueryOptions extends QueryOptions
{
    public const FIELD_ALERT_THRESHOLD = 'alertThreshold';
    public const FIELD_SYNCHRONIZATION_PREVENTION_TYPE = 'synchronizationPreventionType';

    /**
     * Select specific OnPremisesAccidentalDeletionPrevention properties
     * 
     * @param array<string> $select Use OnPremisesAccidentalDeletionPreventionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
