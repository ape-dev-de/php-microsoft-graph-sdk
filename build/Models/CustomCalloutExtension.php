<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomCalloutExtension
 */
class CustomCalloutExtension
{
    /**
     * Configuration for securing the API call to the logic app. For example, using OAuth client credentials flow.
     */
    private ?string $authenticationConfiguration;

    /**
     * HTTP connection settings that define how long Microsoft Entra ID can wait for a connection to a logic app, how many times you can retry a timed-out connection and the exception scenarios when retries are allowed.
     */
    private ?string $clientConfiguration;

    /**
     * Description for the customCalloutExtension object.
     */
    private ?string $description;

    /**
     * Display name for the customCalloutExtension object.
     */
    private ?string $displayName;

    /**
     * The type and details for configuring the endpoint to call the logic app's workflow.
     */
    private ?string $endpointConfiguration;


    public function getAuthenticationConfiguration(): ?string
    {
        return $this->authenticationConfiguration;
    }

    public function setAuthenticationConfiguration(?string $authenticationConfiguration): self
    {
        $this->authenticationConfiguration = $authenticationConfiguration;
        return $this;
    }

    public function getClientConfiguration(): ?string
    {
        return $this->clientConfiguration;
    }

    public function setClientConfiguration(?string $clientConfiguration): self
    {
        $this->clientConfiguration = $clientConfiguration;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getEndpointConfiguration(): ?string
    {
        return $this->endpointConfiguration;
    }

    public function setEndpointConfiguration(?string $endpointConfiguration): self
    {
        $this->endpointConfiguration = $endpointConfiguration;
        return $this;
    }

}
