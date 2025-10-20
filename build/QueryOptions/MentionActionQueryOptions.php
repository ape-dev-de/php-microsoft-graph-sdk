<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MentionAction resources
 *
 * Available select fields:
 * - mentionees
 */
class MentionActionQueryOptions extends QueryOptions
{
    public const FIELD_MENTIONEES = 'mentionees';

    /**
     * Select specific MentionAction properties
     * 
     * @param array<string> $select Use MentionActionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
