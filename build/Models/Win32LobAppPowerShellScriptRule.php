<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppPowerShellScriptRule
 */
class Win32LobAppPowerShellScriptRule
{
    /**
     * The script output comparison value. Do not specify a value if the rule is used for detection.
     */
    private ?string $comparisonValue;

    /**
     * The display name for the rule. Do not specify this value if the rule is used for detection.
     */
    private ?string $displayName;

    /**
     * A value indicating whether a signature check is enforced.
     */
    private ?bool $enforceSignatureCheck;

    /**
     */
    private ?string $operationType;

    /**
     */
    private ?string $operator;

    /**
     * A value indicating whether the script should run as 32-bit.
     */
    private ?bool $runAs32Bit;

    /**
     * The execution context of the script. Do not specify this value if the rule is used for detection. Script detection rules will run in the same context as the associated app install context. Possible values are: system, user.
     */
    private ?string $runAsAccount;

    /**
     * A complex type to store the PowerShell script rule data for a Win32 LOB app.
     */
    private ?string $scriptContent;

    public function getComparisonValue(): ?string
    {
        return $this->comparisonValue;
    }

    public function setComparisonValue(?string $comparisonValue): self
    {
        $this->comparisonValue = $comparisonValue;
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

    public function getEnforceSignatureCheck(): ?bool
    {
        return $this->enforceSignatureCheck;
    }

    public function setEnforceSignatureCheck(?bool $enforceSignatureCheck): self
    {
        $this->enforceSignatureCheck = $enforceSignatureCheck;
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

    public function getRunAs32Bit(): ?bool
    {
        return $this->runAs32Bit;
    }

    public function setRunAs32Bit(?bool $runAs32Bit): self
    {
        $this->runAs32Bit = $runAs32Bit;
        return $this;
    }

    public function getRunAsAccount(): ?string
    {
        return $this->runAsAccount;
    }

    public function setRunAsAccount(?string $runAsAccount): self
    {
        $this->runAsAccount = $runAsAccount;
        return $this;
    }

    public function getScriptContent(): ?string
    {
        return $this->scriptContent;
    }

    public function setScriptContent(?string $scriptContent): self
    {
        $this->scriptContent = $scriptContent;
        return $this;
    }

}
