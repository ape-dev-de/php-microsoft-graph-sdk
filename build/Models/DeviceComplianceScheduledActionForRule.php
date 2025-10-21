<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceComplianceScheduledActionForRule
 */
class DeviceComplianceScheduledActionForRule
{
    public function __construct(
        /** Name of the rule which this scheduled action applies to. Currently scheduled actions are created per policy instead of per rule, thus RuleName is always set to default value PasswordRequired. */
        public ?string $ruleName = null,
        /** @var string[] Scheduled Action for Rule */
        public array $scheduledActionConfigurations = []
    ) {}
}
