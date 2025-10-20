<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppRegistryRule
 */
class Win32LobAppRegistryRule
{
    /**
     * A value indicating whether to search the 32-bit registry on 64-bit systems.
     */
    private ?bool $check32BitOn64System;

    /**
     * The registry comparison value.
     */
    private ?string $comparisonValue;

    /**
     * The full path of the registry entry containing the value to detect.
     */
    private ?string $keyPath;

    /**
     */
    private ?string $operationType;

    /**
     */
    private ?string $operator;

    /**
     * A complex type to store registry rule data for a Win32 LOB app.
     */
    private ?string $valueName;

    public function getCheck32BitOn64System(): ?bool
    {
        return $this->check32BitOn64System;
    }

    public function setCheck32BitOn64System(?bool $check32BitOn64System): self
    {
        $this->check32BitOn64System = $check32BitOn64System;
        return $this;
    }

    public function getComparisonValue(): ?string
    {
        return $this->comparisonValue;
    }

    public function setComparisonValue(?string $comparisonValue): self
    {
        $this->comparisonValue = $comparisonValue;
        return $this;
    }

    public function getKeyPath(): ?string
    {
        return $this->keyPath;
    }

    public function setKeyPath(?string $keyPath): self
    {
        $this->keyPath = $keyPath;
        return $this;
    }

    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    public function setOperationType(?string $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }

    public function getOperator(): ?string
    {
        return $this->operator;
    }

    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;
        return $this;
    }

    public function getValueName(): ?string
    {
        return $this->valueName;
    }

    public function setValueName(?string $valueName): self
    {
        $this->valueName = $valueName;
        return $this;
    }

}
