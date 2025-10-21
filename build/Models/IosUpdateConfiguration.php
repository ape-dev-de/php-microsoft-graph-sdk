<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosUpdateConfiguration
 */
class IosUpdateConfiguration
{
    public function __construct(
        /** Active Hours End (active hours mean the time window when updates install should not happen) */
        public ?string $activeHoursEnd = null,
        /** Active Hours Start (active hours mean the time window when updates install should not happen) */
        public ?string $activeHoursStart = null,
        /** Days in week for which active hours are configured. This collection can contain a maximum of 7 elements. */
        public array $scheduledInstallDays = [],
        /** IOS Update Configuration, allows you to configure time window within week to install iOS updates */
        public ?string $utcTimeOffsetInMinutes = null
    ) {}
}
