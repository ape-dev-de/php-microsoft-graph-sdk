<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetedManagedAppProtection
 */
class TargetedManagedAppProtection
{
    public function __construct(
        /** Indicates if the policy is deployed to any inclusion groups or not. */
        public ?bool $isAssigned = null,
        /** @var string[] Policy used to configure detailed management settings targeted to specific security groups */
        public array $assignments = []
    ) {}
}
