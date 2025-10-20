<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingExportSuccessOperation resources
 *
 * Available select fields:
 * - resourceLocation
 */
class PartnersBillingExportSuccessOperationQueryOptions extends QueryOptions
{
    public const FIELD_RESOURCE_LOCATION = 'resourceLocation';

    /**
     * Select specific PartnersBillingExportSuccessOperation properties
     * 
     * @param array<string> $select Use PartnersBillingExportSuccessOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
