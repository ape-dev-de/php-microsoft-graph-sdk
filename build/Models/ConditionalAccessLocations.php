<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessLocations
 */
class ConditionalAccessLocations
{
    /** 
     * Location IDs excluded from scope of policy.
     * @var string[]
     */
    public array $excludeLocations = [];

    /** 
     * Location IDs in scope of policy unless explicitly excluded, All, or AllTrusted.
     * @var string[]
     */
    public array $includeLocations = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['excludeLocations'])) {
            $this->excludeLocations = $data['excludeLocations'];
        }
        if (isset($data['includeLocations'])) {
            $this->includeLocations = $data['includeLocations'];
        }
    }
}
