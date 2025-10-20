<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CopilotRoot resources
 *
 * Available select fields:
 * - admin
 * - interactionHistory
 * - users
 */
class CopilotRootQueryOptions extends QueryOptions
{
    public const FIELD_ADMIN = 'admin';
    public const FIELD_INTERACTION_HISTORY = 'interactionHistory';
    public const FIELD_USERS = 'users';

    /**
     * Select specific CopilotRoot properties
     * 
     * @param array<string> $select Use CopilotRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
