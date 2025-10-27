<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyBinding
 */
class PolicyBinding
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Specifies the users or groups to be explicitly excluded from this policy scope. Can be null or empty.
     * @var ScopeBase[]
     */
    public array $exclusions = [];

    /** 
     * Specifies the users or groups to be included in this policy scope. Often set to tenantScope for 'All users'.
     * @var ScopeBase[]
     */
    public array $inclusions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['exclusions'])) {
            $this->exclusions = $data['exclusions'];
        }
        if (isset($data['inclusions'])) {
            $this->inclusions = $data['inclusions'];
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
