<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceComplianceScheduledActionForRule
 */
class DeviceComplianceScheduledActionForRule
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Name of the rule which this scheduled action applies to. Currently scheduled actions are created per policy instead of per rule, thus RuleName is always set to default value PasswordRequired. */
        public ?string $ruleName = null,
        /** The list of scheduled action configurations for this compliance policy. Compliance policy must have one and only one block scheduled action. */
        public array $scheduledActionConfigurations = []
    ) {}
}
