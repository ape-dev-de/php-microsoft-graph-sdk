<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LogicAppTriggerEndpointConfiguration resources
 *
 * Available select fields:
 * - logicAppWorkflowName
 * - resourceGroupName
 * - subscriptionId
 * - url
 */
class LogicAppTriggerEndpointConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_LOGIC_APP_WORKFLOW_NAME = 'logicAppWorkflowName';
    public const FIELD_RESOURCE_GROUP_NAME = 'resourceGroupName';
    public const FIELD_SUBSCRIPTION_ID = 'subscriptionId';
    public const FIELD_URL = 'url';

    /**
     * Select specific LogicAppTriggerEndpointConfiguration properties
     * 
     * @param array<string> $select Use LogicAppTriggerEndpointConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
