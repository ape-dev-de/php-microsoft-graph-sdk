<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnPremisesDirectorySynchronization resources
 *
 * Available select fields:
 * - configuration
 * - features
 */
class OnPremisesDirectorySynchronizationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnPremisesDirectorySynchronization
     */
    public const FIELD_CONFIGURATION = 'configuration';
    public const FIELD_FEATURES = 'features';

    /**
     * Select specific OnPremisesDirectorySynchronization properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
