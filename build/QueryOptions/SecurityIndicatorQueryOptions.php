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
    public const FIELD_SOURCE = 'source';
    public const FIELD_ARTIFACT = 'artifact';

    /**
     * Select specific SecurityIndicator properties
     * 
     * @param array<string> $select Use SecurityIndicatorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
