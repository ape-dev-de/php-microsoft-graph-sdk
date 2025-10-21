<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClassificationInnerError
 */
class ClassificationInnerError
{
    /**
     * The activity ID associated with the request that generated the error.
     */
    private ?string $activityId;

    /**
     * The client request ID, if provided by the caller.
     */
    private ?string $clientRequestId;

    /**
     * A more specific, potentially internal, error code string.
     */
    private ?string $code;

    /**
     * The date and time the inner error occurred.
     */
    private ?\DateTimeInterface $errorDateTime;


    public function getActivityId(): ?string
    {
        return $this->activityId;
    }

    public function setActivityId(?string $activityId): self
    {
        $this->activityId = $activityId;
        return $this;
    }

    public function getClientRequestId(): ?string
    {
        return $this->clientRequestId;
    }

    public function setClientRequestId(?string $clientRequestId): self
    {
        $this->clientRequestId = $clientRequestId;
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function getErrorDateTime(): ?\DateTimeInterface
    {
        return $this->errorDateTime;
    }

    public function setErrorDateTime(?\DateTimeInterface $errorDateTime): self
    {
        $this->errorDateTime = $errorDateTime;
        return $this;
    }

}
