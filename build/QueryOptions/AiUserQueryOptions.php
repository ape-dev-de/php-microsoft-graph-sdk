<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiUser resources
 *
 * Available select fields:
 * - interactionHistory
 */
class AiUserQueryOptions extends QueryOptions
{
    public const FIELD_INTERACTION_HISTORY = 'interactionHistory';

    /**
     * Select specific AiUser properties
     * 
     * @param array<string> $select Use AiUserQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
