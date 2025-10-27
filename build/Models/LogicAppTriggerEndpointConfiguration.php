<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LogicAppTriggerEndpointConfiguration
 */
class LogicAppTriggerEndpointConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The name of the logic app. */
    public ?string $logicAppWorkflowName = null;

    /** The Azure resource group name for the logic app. */
    public ?string $resourceGroupName = null;

    /** Identifier of the Azure subscription for the logic app. */
    public ?string $subscriptionId = null;

    /** The URL to the logic app endpoint that will be triggered. Only required for app-only token scenarios where app is creating a customCalloutExtension without a signed-in user. */
    public ?string $url = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['logicAppWorkflowName'])) {
            $this->logicAppWorkflowName = $data['logicAppWorkflowName'];
        }
        if (isset($data['resourceGroupName'])) {
            $this->resourceGroupName = $data['resourceGroupName'];
        }
        if (isset($data['subscriptionId'])) {
            $this->subscriptionId = $data['subscriptionId'];
        }
        if (isset($data['url'])) {
            $this->url = $data['url'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
