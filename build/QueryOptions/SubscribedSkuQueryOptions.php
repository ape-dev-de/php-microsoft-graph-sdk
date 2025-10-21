<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubscribedSku resources
 *
 * Available select fields:
 * - accountId
 * - accountName
 * - appliesTo
 * - capabilityStatus
 * - consumedUnits
 * - prepaidUnits
 * - servicePlans
 * - skuId
 * - skuPartNumber
 * - subscriptionIds
 */
class SubscribedSkuQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SubscribedSku
     */
    public const FIELD_ACCOUNT_ID = 'accountId';
    public const FIELD_ACCOUNT_NAME = 'accountName';
    public const FIELD_APPLIES_TO = 'appliesTo';
    public const FIELD_CAPABILITY_STATUS = 'capabilityStatus';
    public const FIELD_CONSUMED_UNITS = 'consumedUnits';
    public const FIELD_PREPAID_UNITS = 'prepaidUnits';
    public const FIELD_SERVICE_PLANS = 'servicePlans';
    public const FIELD_SKU_ID = 'skuId';
    public const FIELD_SKU_PART_NUMBER = 'skuPartNumber';
    public const FIELD_SUBSCRIPTION_IDS = 'subscriptionIds';

    /**
     * Select specific SubscribedSku properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
