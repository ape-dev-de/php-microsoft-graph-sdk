<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIndicator resources
 *
 * Available select fields:
 * - source
 * - artifact
 */
class SecurityIndicatorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIndicator
     */
    public const FIELD_SOURCE = 'source';
    public const FIELD_ARTIFACT = 'artifact';

    /**
     * Select specific SecurityIndicator properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
