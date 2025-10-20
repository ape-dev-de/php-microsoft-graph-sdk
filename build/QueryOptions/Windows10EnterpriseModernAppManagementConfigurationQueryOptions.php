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
    public const FIELD_UNINSTALL_BUILT_IN_APPS = 'uninstallBuiltInApps';

    /**
     * Select specific Windows10EnterpriseModernAppManagementConfiguration properties
     * 
     * @param array<string> $select Use Windows10EnterpriseModernAppManagementConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
