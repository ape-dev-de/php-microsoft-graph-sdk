<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppsInstallationOptionsForWindows resources
 *
 * Available select fields:
 * - isMicrosoft365AppsEnabled
 * - isProjectEnabled
 * - isSkypeForBusinessEnabled
 * - isVisioEnabled
 */
class AppsInstallationOptionsForWindowsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppsInstallationOptionsForWindows
     */
    public const FIELD_IS_MICROSOFT365APPS_ENABLED = 'isMicrosoft365AppsEnabled';
    public const FIELD_IS_PROJECT_ENABLED = 'isProjectEnabled';
    public const FIELD_IS_SKYPE_FOR_BUSINESS_ENABLED = 'isSkypeForBusinessEnabled';
    public const FIELD_IS_VISIO_ENABLED = 'isVisioEnabled';

    /**
     * Select specific AppsInstallationOptionsForWindows properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
