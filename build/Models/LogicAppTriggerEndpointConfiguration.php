<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LogicAppTriggerEndpointConfiguration
 */
class LogicAppTriggerEndpointConfiguration
{
    public function __construct(
        /** The name of the logic app. */
        public ?string $logicAppWorkflowName = null,
        /** The Azure resource group name for the logic app. */
        public ?string $resourceGroupName = null,
        /** Identifier of the Azure subscription for the logic app. */
        public ?string $subscriptionId = null,
        /** The URL to the logic app endpoint that will be triggered. Only required for app-only token scenarios where app is creating a customCalloutExtension without a signed-in user. */
        public ?string $url = null
    ) {}
}
