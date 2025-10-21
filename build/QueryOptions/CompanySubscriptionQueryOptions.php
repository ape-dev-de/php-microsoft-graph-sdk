<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CompanySubscription resources
 *
 * Available select fields:
 * - commerceSubscriptionId
 * - createdDateTime
 * - isTrial
 * - nextLifecycleDateTime
 * - ownerId
 * - ownerTenantId
 * - ownerType
 * - serviceStatus
 * - skuId
 * - skuPartNumber
 * - status
 * - totalLicenses
 */
class CompanySubscriptionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CompanySubscription
     */
    public const FIELD_COMMERCE_SUBSCRIPTION_ID = 'commerceSubscriptionId';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_IS_TRIAL = 'isTrial';
    public const FIELD_NEXT_LIFECYCLE_DATE_TIME = 'nextLifecycleDateTime';
    public const FIELD_OWNER_ID = 'ownerId';
    public const FIELD_OWNER_TENANT_ID = 'ownerTenantId';
    public const FIELD_OWNER_TYPE = 'ownerType';
    public const FIELD_SERVICE_STATUS = 'serviceStatus';
    public const FIELD_SKU_ID = 'skuId';
    public const FIELD_SKU_PART_NUMBER = 'skuPartNumber';
    public const FIELD_STATUS = 'status';
    public const FIELD_TOTAL_LICENSES = 'totalLicenses';

    /**
     * Select specific CompanySubscription properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
