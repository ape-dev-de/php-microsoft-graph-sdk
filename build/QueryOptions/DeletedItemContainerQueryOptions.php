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
    /**
     * Available select fields for DeletedItemContainer
     */
    public const FIELD_WORKFLOWS = 'workflows';

    /**
     * Select specific DeletedItemContainer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
