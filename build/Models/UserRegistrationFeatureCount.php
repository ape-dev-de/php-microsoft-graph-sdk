<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationFeatureCount
 */
class UserRegistrationFeatureCount
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?AuthenticationMethodFeature $feature = null;

    /** Number of users. */
    public ?float $userCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['feature'])) {
            $this->feature = is_string($data['feature']) ? AuthenticationMethodFeature::tryFrom($data['feature']) : $data['feature'];
        }
        if (isset($data['userCount'])) {
            $this->userCount = is_numeric($data['userCount']) ? (float)$data['userCount'] : $data['userCount'];
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
