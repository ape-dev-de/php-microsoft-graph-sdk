<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10EnterpriseModernAppManagementConfiguration resources
 *
 * Available select fields:
 * - uninstallBuiltInApps
 */
class Windows10EnterpriseModernAppManagementConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows10EnterpriseModernAppManagementConfiguration
     */
    public const FIELD_UNINSTALL_BUILT_IN_APPS = 'uninstallBuiltInApps';

    /**
     * Select specific Windows10EnterpriseModernAppManagementConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
