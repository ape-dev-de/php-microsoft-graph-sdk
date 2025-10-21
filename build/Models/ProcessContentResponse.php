<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentResponse
 */
class ProcessContentResponse
{
    /**
     * A collection of policy actions (like DLP actions) triggered by the processed content. NOTE: Currently, the only policy action supported in for this resource type is restrictAccess.
     */
    private array $policyActions = [];

    /**
     * A collection of errors encountered during the content processing.
     */
    private array $processingErrors = [];

    /**
     */
    private ?string $protectionScopeState;


    public function getPolicyActions(): array
    {
        return $this->policyActions;
    }

    public function setPolicyActions(array $policyActions): self
    {
        $this->policyActions = $policyActions;
        return $this;
    }

    public function getProcessingErrors(): array
    {
        return $this->processingErrors;
    }

    public function setProcessingErrors(array $processingErrors): self
    {
        $this->processingErrors = $processingErrors;
        return $this;
    }

    public function getProtectionScopeState(): ?string
    {
        return $this->protectionScopeState;
    }

    public function setProtectionScopeState(?string $protectionScopeState): self
    {
        $this->protectionScopeState = $protectionScopeState;
        return $this;
    }

}
