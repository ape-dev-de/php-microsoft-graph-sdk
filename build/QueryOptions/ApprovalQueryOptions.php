<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Approval resources
 *
 * Available select fields:
 * - stages
 */
class ApprovalQueryOptions extends QueryOptions
{
    public const FIELD_STAGES = 'stages';

    /**
     * Select specific Approval properties
     * 
     * @param array<string> $select Use ApprovalQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
