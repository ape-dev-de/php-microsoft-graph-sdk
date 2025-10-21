<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppsInstallationOptionsForMac resources
 *
 * Available select fields:
 * - isMicrosoft365AppsEnabled
 * - isSkypeForBusinessEnabled
 */
class AppsInstallationOptionsForMacQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppsInstallationOptionsForMac
     */
    public const FIELD_IS_MICROSOFT365APPS_ENABLED = 'isMicrosoft365AppsEnabled';
    public const FIELD_IS_SKYPE_FOR_BUSINESS_ENABLED = 'isSkypeForBusinessEnabled';

    /**
     * Select specific AppsInstallationOptionsForMac properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
