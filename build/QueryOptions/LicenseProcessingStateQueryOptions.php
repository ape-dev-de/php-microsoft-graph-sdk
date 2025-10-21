<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LicenseProcessingState resources
 *
 * Available select fields:
 * - state
 */
class LicenseProcessingStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LicenseProcessingState
     */
    public const FIELD_STATE = 'state';

    /**
     * Select specific LicenseProcessingState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
