<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeletedItemContainer resources
 *
 * Available select fields:
 * - workflows
 */
class DeletedItemContainerQueryOptions extends QueryOptions
{
    public const FIELD_WORKFLOWS = 'workflows';

    /**
     * Select specific DeletedItemContainer properties
     * 
     * @param array<string> $select Use DeletedItemContainerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
