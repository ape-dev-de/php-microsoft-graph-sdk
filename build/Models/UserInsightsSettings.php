<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserInsightsSettings
 */
class UserInsightsSettings
{
    public function __construct(
        /** True if the user's itemInsights and meeting hours insights are enabled; false if the user's itemInsights and meeting hours insights are disabled. The default value is true. Optional. */
        public ?string $isEnabled = null
    ) {}
}
