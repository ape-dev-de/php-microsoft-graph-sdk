<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationStrengthUsage
 */
class AuthenticationStrengthUsage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var ConditionalAccessPolicy[]
     */
    public array $mfa = [];

    /** 
     * 
     * @var ConditionalAccessPolicy[]
     */
    public array $none = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['mfa'])) {
            $this->mfa = $data['mfa'];
        }
        if (isset($data['none'])) {
            $this->none = $data['none'];
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
