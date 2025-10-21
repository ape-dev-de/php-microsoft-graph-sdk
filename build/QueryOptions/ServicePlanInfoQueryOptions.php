<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServicePlanInfo resources
 *
 * Available select fields:
 * - appliesTo
 * - provisioningStatus
 * - servicePlanId
 * - servicePlanName
 */
class ServicePlanInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServicePlanInfo
     */
    public const FIELD_APPLIES_TO = 'appliesTo';
    public const FIELD_PROVISIONING_STATUS = 'provisioningStatus';
    public const FIELD_SERVICE_PLAN_ID = 'servicePlanId';
    public const FIELD_SERVICE_PLAN_NAME = 'servicePlanName';

    /**
     * Select specific ServicePlanInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
