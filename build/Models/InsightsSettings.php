<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InsightsSettings
 */
class InsightsSettings
{
    public function __construct(
        /** The ID of a Microsoft Entra group, of which the specified type of insights are disabled for its members. The default value is null. Optional. */
        public ?string $disabledForGroup = null,
        /** true if insights of the specified type are enabled for the organization; false if insights of the specified type are disabled for all users without exceptions. The default value is true. Optional. */
        public ?string $isEnabledInOrganization = null
    ) {}
}
