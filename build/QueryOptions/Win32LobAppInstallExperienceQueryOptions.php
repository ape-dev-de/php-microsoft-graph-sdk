<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppInstallExperience resources
 *
 * Available select fields:
 * - deviceRestartBehavior
 * - runAsAccount
 */
class Win32LobAppInstallExperienceQueryOptions extends QueryOptions
{
    public const FIELD_DEVICE_RESTART_BEHAVIOR = 'deviceRestartBehavior';
    public const FIELD_RUN_AS_ACCOUNT = 'runAsAccount';

    /**
     * Select specific Win32LobAppInstallExperience properties
     * 
     * @param array<string> $select Use Win32LobAppInstallExperienceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
