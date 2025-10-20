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
    public const FIELD_ACCIDENTAL_DELETION_PREVENTION = 'accidentalDeletionPrevention';

    /**
     * Select specific OnPremisesDirectorySynchronizationConfiguration properties
     * 
     * @param array<string> $select Use OnPremisesDirectorySynchronizationConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
