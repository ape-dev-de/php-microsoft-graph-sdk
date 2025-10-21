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
    /**
     * Available select fields for MentionAction
     */
    public const FIELD_MENTIONEES = 'mentionees';

    /**
     * Select specific MentionAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
