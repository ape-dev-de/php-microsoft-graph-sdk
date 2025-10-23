<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupFilter
 */
class GroupFilter
{
    /** 
     * 
     * @var string[]
     */
    public array $includedGroups = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['includedGroups'])) {
            $this->includedGroups = $data['includedGroups'];
        }
    }
}
