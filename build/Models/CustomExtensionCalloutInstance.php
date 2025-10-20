<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionCalloutInstance
 */
class CustomExtensionCalloutInstance
{
    /**
     * Identification of the custom extension that was triggered at this instance.
     */
    private ?string $customExtensionId;

    /**
     * Details provided by the logic app during the callback of the request instance.
     */
    private ?string $detail;

    /**
     * The unique run identifier for the logic app.
     */
    private ?string $externalCorrelationId;

    /**
     * Unique identifier for the callout instance. Read-only.
     */
    private ?string $id;

    /**
     * The status of the request to the custom extension. The possible values are: calloutSent, callbackReceived, calloutFailed, callbackTimedOut, waitingForCallback, unknownFutureValue.
     */
    private ?string $status;

    public function getCustomExtensionId(): ?string
    {
        return $this->customExtensionId;
    }

    public function setCustomExtensionId(?string $customExtensionId): self
    {
        $this->customExtensionId = $customExtensionId;
        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(?string $detail): self
    {
        $this->detail = $detail;
        return $this;
    }

    public function getExternalCorrelationId(): ?string
    {
        return $this->externalCorrelationId;
    }

    public function setExternalCorrelationId(?string $externalCorrelationId): self
    {
        $this->externalCorrelationId = $externalCorrelationId;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
