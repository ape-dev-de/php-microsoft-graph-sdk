<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingExportSuccessOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PartnersBillingExportSuccessOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PartnersBillingExportSuccessOperationCollectionResponse properties
     * 
     * @param array<string> $select Use PartnersBillingExportSuccessOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
