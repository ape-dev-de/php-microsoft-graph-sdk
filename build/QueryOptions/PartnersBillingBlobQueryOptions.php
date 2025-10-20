<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingBlob resources
 *
 * Available select fields:
 * - name
 * - partitionValue
 */
class PartnersBillingBlobQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';
    public const FIELD_PARTITION_VALUE = 'partitionValue';

    /**
     * Select specific PartnersBillingBlob properties
     * 
     * @param array<string> $select Use PartnersBillingBlobQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
