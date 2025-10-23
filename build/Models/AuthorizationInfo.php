<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthorizationInfo
 */
class AuthorizationInfo
{
    /** 
     * 
     * @var string[]
     */
    public array $certificateUserIds = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['certificateUserIds'])) {
            $this->certificateUserIds = $data['certificateUserIds'];
        }
    }
}
