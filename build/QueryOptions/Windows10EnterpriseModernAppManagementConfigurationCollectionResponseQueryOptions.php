<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10EnterpriseModernAppManagementConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class Windows10EnterpriseModernAppManagementConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific Windows10EnterpriseModernAppManagementConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use Windows10EnterpriseModernAppManagementConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
