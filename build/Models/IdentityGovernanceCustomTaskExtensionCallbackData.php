<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtensionCallbackData
 */
class IdentityGovernanceCustomTaskExtensionCallbackData
{
    /**
     * Operation status that''s provided by the Azure Logic App indicating whenever the Azure Logic App has run successfully or not. Supported values: completed, failed, unknownFutureValue.
     */
    private ?string $operationStatus;

    public function getOperationStatus(): ?string
    {
        return $this->operationStatus;
    }

    public function setOperationStatus(?string $operationStatus): self
    {
        $this->operationStatus = $operationStatus;
        return $this;
    }

}
