<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InvestigationSecurityState resources
 *
 * Available select fields:
 * - name
 * - status
 */
class InvestigationSecurityStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InvestigationSecurityState
     */
    public const FIELD_NAME = 'name';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific InvestigationSecurityState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
