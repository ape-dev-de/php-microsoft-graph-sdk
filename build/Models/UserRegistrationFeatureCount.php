<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationFeatureCount
 */
class UserRegistrationFeatureCount
{
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
        if (isset($data['feature'])) {
            $this->feature = $data['feature'];
        }
        if (isset($data['userCount'])) {
            $this->userCount = $data['userCount'];
        }
    }
}
