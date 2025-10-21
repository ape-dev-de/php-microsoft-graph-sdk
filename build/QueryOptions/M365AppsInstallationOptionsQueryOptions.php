<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for M365AppsInstallationOptions resources
 *
 * Available select fields:
 * - appsForMac
 * - appsForWindows
 * - updateChannel
 */
class M365AppsInstallationOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for M365AppsInstallationOptions
     */
    public const FIELD_APPS_FOR_MAC = 'appsForMac';
    public const FIELD_APPS_FOR_WINDOWS = 'appsForWindows';
    public const FIELD_UPDATE_CHANNEL = 'updateChannel';

    /**
     * Select specific M365AppsInstallationOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
