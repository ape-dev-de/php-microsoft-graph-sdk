<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppRegistryRule
 */
class Win32LobAppRegistryRule
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?Win32LobAppRuleType $ruleType = null;

    /** A value indicating whether to search the 32-bit registry on 64-bit systems. */
    public ?bool $check32BitOn64System = null;

    /** The registry comparison value. */
    public ?string $comparisonValue = null;

    /** The full path of the registry entry containing the value to detect. */
    public ?string $keyPath = null;

    /**  */
    public ?Win32LobAppRegistryRuleOperationType $operationType = null;

    /**  */
    public ?Win32LobAppRuleOperator $operator = null;

    /** The name of the registry value to detect. */
    public ?string $valueName = null;


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
        if (isset($data['check32BitOn64System'])) {
            $this->check32BitOn64System = $data['check32BitOn64System'];
        }
        if (isset($data['comparisonValue'])) {
            $this->comparisonValue = $data['comparisonValue'];
        }
        if (isset($data['keyPath'])) {
            $this->keyPath = $data['keyPath'];
        }
        if (isset($data['operationType'])) {
            $this->operationType = is_array($data['operationType']) ? new Win32LobAppRegistryRuleOperationType($data['operationType']) : $data['operationType'];
        }
        if (isset($data['operator'])) {
            $this->operator = is_array($data['operator']) ? new Win32LobAppRuleOperator($data['operator']) : $data['operator'];
        }
        if (isset($data['valueName'])) {
            $this->valueName = $data['valueName'];
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
