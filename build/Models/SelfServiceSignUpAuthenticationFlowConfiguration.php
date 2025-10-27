<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SelfServiceSignUpAuthenticationFlowConfiguration
 */
class SelfServiceSignUpAuthenticationFlowConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether self-service sign-up flow is enabled or disabled. The default value is false. This property isn't a key. Required. */
    public ?bool $isEnabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isEnabled'])) {
            $this->isEnabled = is_bool($data['isEnabled']) ? $data['isEnabled'] : (bool)$data['isEnabled'];
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
