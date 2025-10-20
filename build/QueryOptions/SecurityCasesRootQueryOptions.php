<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCasesRoot resources
 *
 * Available select fields:
 * - ediscoveryCases
 */
class SecurityCasesRootQueryOptions extends QueryOptions
{
    public const FIELD_EDISCOVERY_CASES = 'ediscoveryCases';

    /**
     * Select specific SecurityCasesRoot properties
     * 
     * @param array<string> $select Use SecurityCasesRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
