<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityUnifiedGroupSource resources
 *
 * Available select fields:
 * - includedSources
 * - group
 */
class SecurityUnifiedGroupSourceQueryOptions extends QueryOptions
{
    public const FIELD_INCLUDED_SOURCES = 'includedSources';
    public const FIELD_GROUP = 'group';

    /**
     * Select specific SecurityUnifiedGroupSource properties
     * 
     * @param array<string> $select Use SecurityUnifiedGroupSourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
