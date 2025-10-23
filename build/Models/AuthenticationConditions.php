<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationConditions
 */
class AuthenticationConditions
{
    /** 
     * Applications which trigger a custom authentication extension.
     * @var AuthenticationConditionsApplications|\stdClass|null
     */
    public mixed $applications = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['applications'])) {
            $this->applications = is_array($data['applications']) ? new AuthenticationConditionsApplications($data['applications']) : $data['applications'];
        }
    }
}
