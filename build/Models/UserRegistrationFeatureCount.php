<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationFeatureCount
 */
class UserRegistrationFeatureCount
{
    public function __construct(
        /**  */
        public ?AuthenticationMethodFeature $feature = null,
        /** Number of users. */
        public ?float $userCount = null
    ) {}
}
