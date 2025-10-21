<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnPremisesDirectorySynchronizationConfiguration resources
 *
 * Available select fields:
 * - accidentalDeletionPrevention
 */
class OnPremisesDirectorySynchronizationConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnPremisesDirectorySynchronizationConfiguration
     */
    public const FIELD_ACCIDENTAL_DELETION_PREVENTION = 'accidentalDeletionPrevention';

    /**
     * Select specific OnPremisesDirectorySynchronizationConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
