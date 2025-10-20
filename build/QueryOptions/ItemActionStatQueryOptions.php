<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ItemActionStat resources
 *
 * Available select fields:
 * - actionCount
 * - actorCount
 */
class ItemActionStatQueryOptions extends QueryOptions
{
    public const FIELD_ACTION_COUNT = 'actionCount';
    public const FIELD_ACTOR_COUNT = 'actorCount';

    /**
     * Select specific ItemActionStat properties
     * 
     * @param array<string> $select Use ItemActionStatQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
