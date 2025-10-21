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
    /**
     * Available select fields for UserScopeTeamsAppInstallation
     */
    public const FIELD_CHAT = 'chat';

    /**
     * Select specific UserScopeTeamsAppInstallation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
