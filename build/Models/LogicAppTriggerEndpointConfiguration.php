<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LogicAppTriggerEndpointConfiguration
 */
class LogicAppTriggerEndpointConfiguration
{
    /**
     * The name of the logic app.
     */
    private ?string $logicAppWorkflowName;

    /**
     * The Azure resource group name for the logic app.
     */
    private ?string $resourceGroupName;

    /**
     * Identifier of the Azure subscription for the logic app.
     */
    private ?string $subscriptionId;

    /**
     * The URL to the logic app endpoint that will be triggered. Only required for app-only token scenarios where app is creating a customCalloutExtension without a signed-in user.
     */
    private ?string $url;

    public function getLogicAppWorkflowName(): ?string
    {
        return $this->logicAppWorkflowName;
    }

    public function setLogicAppWorkflowName(?string $logicAppWorkflowName): self
    {
        $this->logicAppWorkflowName = $logicAppWorkflowName;
        return $this;
    }

    public function getResourceGroupName(): ?string
    {
        return $this->resourceGroupName;
    }

    public function setResourceGroupName(?string $resourceGroupName): self
    {
        $this->resourceGroupName = $resourceGroupName;
        return $this;
    }

    public function getSubscriptionId(): ?string
    {
        return $this->subscriptionId;
    }

    public function setSubscriptionId(?string $subscriptionId): self
    {
        $this->subscriptionId = $subscriptionId;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

}
