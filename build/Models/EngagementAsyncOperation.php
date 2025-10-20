<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EngagementAsyncOperation
 */
class EngagementAsyncOperation
{
    /**
     * The type of the long-running operation. The possible values are: createCommunity, unknownFutureValue.
     */
    private ?string $operationType;

    /**
     * Represents the status of a Viva Engage async operation that is an operation that transcends the\nlifetime of a single API request. These operations are long-running or too expensive to complete\nwithin the time frame of their original request.
     */
    private ?string $resourceId;

    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    public function setOperationType(?string $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }

    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    public function setResourceId(?string $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }

}
