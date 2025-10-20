<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteractionMentionedIdentitySet resources
 *
 * Available select fields:
 * - conversation
 * - tag
 */
class AiInteractionMentionedIdentitySetQueryOptions extends QueryOptions
{
    public const FIELD_CONVERSATION = 'conversation';
    public const FIELD_TAG = 'tag';

    /**
     * Select specific AiInteractionMentionedIdentitySet properties
     * 
     * @param array<string> $select Use AiInteractionMentionedIdentitySetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
