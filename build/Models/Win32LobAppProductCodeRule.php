<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppProductCodeRule
 */
class Win32LobAppProductCodeRule
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?Win32LobAppRuleType $ruleType = null;

    /** The product code of the app. */
    public ?string $productCode = null;

    /** The product version comparison value. */
    public ?string $productVersion = null;

    /**  */
    public ?Win32LobAppRuleOperator $productVersionOperator = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['ruleType'])) {
            $this->ruleType = is_string($data['ruleType']) ? Win32LobAppRuleType::tryFrom($data['ruleType']) : $data['ruleType'];
        }
        if (isset($data['productCode'])) {
            $this->productCode = $data['productCode'];
        }
        if (isset($data['productVersion'])) {
            $this->productVersion = $data['productVersion'];
        }
        if (isset($data['productVersionOperator'])) {
            $this->productVersionOperator = is_string($data['productVersionOperator']) ? Win32LobAppRuleOperator::tryFrom($data['productVersionOperator']) : $data['productVersionOperator'];
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
