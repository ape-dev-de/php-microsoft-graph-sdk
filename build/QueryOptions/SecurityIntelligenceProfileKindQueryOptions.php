<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIntelligenceProfileKind resources
 *
 * Available select fields:
 */
class SecurityIntelligenceProfileKindQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIntelligenceProfileKind
     */

    /**
     * Select specific SecurityIntelligenceProfileKind properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
