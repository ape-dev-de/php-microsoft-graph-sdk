<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationStrengthUsage
 */
class AuthenticationStrengthUsage
{
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
        if (isset($data['mfa'])) {
            $this->mfa = $data['mfa'];
        }
        if (isset($data['none'])) {
            $this->none = $data['none'];
        }
    }
}
