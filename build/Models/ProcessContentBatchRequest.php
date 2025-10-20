<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentBatchRequest
 */
class ProcessContentBatchRequest
{
    /**
     */
    private ?string $contentToProcess;

    /**
     * A unique identifier provided by the client to correlate this specific request item within the batch.
     */
    private ?string $requestId;

    /**
     * The unique identifier (Object ID or UPN) of the user in whose context the content should be processed.
     */
    private ?string $userId;

    public function getContentToProcess(): ?string
    {
        return $this->contentToProcess;
    }

    public function setContentToProcess(?string $contentToProcess): self
    {
        $this->contentToProcess = $contentToProcess;
        return $this;
    }

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    public function setRequestId(?string $requestId): self
    {
        $this->requestId = $requestId;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

}
