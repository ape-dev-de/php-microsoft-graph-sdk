<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppDiagnosticStatus
 */
class ManagedAppDiagnosticStatus
{
    /**
     * Instruction on how to mitigate a failed validation
     */
    private ?string $mitigationInstruction;

    /**
     * The state of the operation
     */
    private ?string $state;

    /**
     * Represents diagnostics status.
     */
    private ?string $validationName;

    public function getMitigationInstruction(): ?string
    {
        return $this->mitigationInstruction;
    }

    public function setMitigationInstruction(?string $mitigationInstruction): self
    {
        $this->mitigationInstruction = $mitigationInstruction;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getValidationName(): ?string
    {
        return $this->validationName;
    }

    public function setValidationName(?string $validationName): self
    {
        $this->validationName = $validationName;
        return $this;
    }

}
