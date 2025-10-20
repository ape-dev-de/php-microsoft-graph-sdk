<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InviteNewBotResponse resources
 *
 * Available select fields:
 * - inviteUri
 */
class InviteNewBotResponseQueryOptions extends QueryOptions
{
    public const FIELD_INVITE_URI = 'inviteUri';

    /**
     * Select specific InviteNewBotResponse properties
     * 
     * @param array<string> $select Use InviteNewBotResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
