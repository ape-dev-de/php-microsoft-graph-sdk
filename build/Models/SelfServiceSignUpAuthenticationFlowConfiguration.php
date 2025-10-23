<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SelfServiceSignUpAuthenticationFlowConfiguration
 */
class SelfServiceSignUpAuthenticationFlowConfiguration
{
    /** Indicates whether self-service sign-up flow is enabled or disabled. The default value is false. This property isn't a key. Required. */
    public ?bool $isEnabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
    }
}
