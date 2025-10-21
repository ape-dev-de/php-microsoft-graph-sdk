<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisioningStep resources
 *
 * Available select fields:
 * - description
 * - details
 * - name
 * - provisioningStepType
 * - status
 */
class ProvisioningStepQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProvisioningStep
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DETAILS = 'details';
    public const FIELD_NAME = 'name';
    public const FIELD_PROVISIONING_STEP_TYPE = 'provisioningStepType';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific ProvisioningStep properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
