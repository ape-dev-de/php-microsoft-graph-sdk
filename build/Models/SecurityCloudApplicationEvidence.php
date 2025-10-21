<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCloudApplicationEvidence
 */
class SecurityCloudApplicationEvidence
{
    /**
     * Unique identifier of the application.
     */
    private ?float $appId;

    /**
     * Name of the application.
     */
    private ?string $displayName;

    /**
     * Identifier of the instance of the Software as a Service (SaaS) application.
     */
    private ?float $instanceId;

    /**
     * Name of the instance of the SaaS application.
     */
    private ?string $instanceName;

    /**
     * The identifier of the SaaS application.
     */
    private ?float $saasAppId;

    /**
     */
    private ?string $stream;


    public function getAppId(): ?float
    {
        return $this->appId;
    }

    public function setAppId(?float $appId): self
    {
        $this->appId = $appId;
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

    public function getInstanceId(): ?float
    {
        return $this->instanceId;
    }

    public function setInstanceId(?float $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    public function getInstanceName(): ?string
    {
        return $this->instanceName;
    }

    public function setInstanceName(?string $instanceName): self
    {
        $this->instanceName = $instanceName;
        return $this;
    }

    public function getSaasAppId(): ?float
    {
        return $this->saasAppId;
    }

    public function setSaasAppId(?float $saasAppId): self
    {
        $this->saasAppId = $saasAppId;
        return $this;
    }

    public function getStream(): ?string
    {
        return $this->stream;
    }

    public function setStream(?string $stream): self
    {
        $this->stream = $stream;
        return $this;
    }

}
