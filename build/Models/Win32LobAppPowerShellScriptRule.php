<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppPowerShellScriptRule
 */
class Win32LobAppPowerShellScriptRule
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?Win32LobAppRuleType $ruleType = null;

    /** The script output comparison value. Do not specify a value if the rule is used for detection. */
    public ?string $comparisonValue = null;

    /** The display name for the rule. Do not specify this value if the rule is used for detection. */
    public ?string $displayName = null;

    /** A value indicating whether a signature check is enforced. */
    public ?bool $enforceSignatureCheck = null;

    /**  */
    public ?Win32LobAppPowerShellScriptRuleOperationType $operationType = null;

    /**  */
    public ?Win32LobAppRuleOperator $operator = null;

    /** A value indicating whether the script should run as 32-bit. */
    public ?bool $runAs32Bit = null;

    /** 
     * The execution context of the script. Do not specify this value if the rule is used for detection. Script detection rules will run in the same context as the associated app install context. Possible values are: system, user.
     * @var RunAsAccountType|\stdClass|null
     */
    public mixed $runAsAccount = null;

    /** The base64-encoded script content. */
    public ?string $scriptContent = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['ruleType'])) {
            $this->ruleType = is_array($data['ruleType']) ? new Win32LobAppRuleType($data['ruleType']) : $data['ruleType'];
        }
        if (isset($data['comparisonValue'])) {
            $this->comparisonValue = $data['comparisonValue'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['enforceSignatureCheck'])) {
            $this->enforceSignatureCheck = $data['enforceSignatureCheck'];
        }
        if (isset($data['operationType'])) {
            $this->operationType = is_array($data['operationType']) ? new Win32LobAppPowerShellScriptRuleOperationType($data['operationType']) : $data['operationType'];
        }
        if (isset($data['operator'])) {
            $this->operator = is_array($data['operator']) ? new Win32LobAppRuleOperator($data['operator']) : $data['operator'];
        }
        if (isset($data['runAs32Bit'])) {
            $this->runAs32Bit = $data['runAs32Bit'];
        }
        if (isset($data['runAsAccount'])) {
            $this->runAsAccount = is_array($data['runAsAccount']) ? new RunAsAccountType($data['runAsAccount']) : $data['runAsAccount'];
        }
        if (isset($data['scriptContent'])) {
            $this->scriptContent = $data['scriptContent'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
