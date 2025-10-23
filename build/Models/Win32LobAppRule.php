<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppRule
 */
class Win32LobAppRule
{
    /**  */
    public ?Win32LobAppRuleType $ruleType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['ruleType'])) {
            $this->ruleType = is_array($data['ruleType']) ? new Win32LobAppRuleType($data['ruleType']) : $data['ruleType'];
        }
    }
}
