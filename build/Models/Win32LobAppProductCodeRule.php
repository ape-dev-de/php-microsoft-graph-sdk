<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppProductCodeRule
 */
class Win32LobAppProductCodeRule
{
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
        if (isset($data['ruleType'])) {
            $this->ruleType = is_array($data['ruleType']) ? new Win32LobAppRuleType($data['ruleType']) : $data['ruleType'];
        }
        if (isset($data['productCode'])) {
            $this->productCode = $data['productCode'];
        }
        if (isset($data['productVersion'])) {
            $this->productVersion = $data['productVersion'];
        }
        if (isset($data['productVersionOperator'])) {
            $this->productVersionOperator = is_array($data['productVersionOperator']) ? new Win32LobAppRuleOperator($data['productVersionOperator']) : $data['productVersionOperator'];
        }
    }
}
