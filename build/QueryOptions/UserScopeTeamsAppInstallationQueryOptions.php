<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserScopeTeamsAppInstallation resources
 *
 * Available select fields:
 * - chat
 */
class UserScopeTeamsAppInstallationQueryOptions extends QueryOptions
{
    public const FIELD_CHAT = 'chat';

    /**
     * Select specific UserScopeTeamsAppInstallation properties
     * 
     * @param array<string> $select Use UserScopeTeamsAppInstallationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
