<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppManagementPolicy
 */
class AppManagementPolicy
{
    public function __construct(
        /** Denotes whether the policy is enabled. */
        public ?bool $isEnabled = null,
        /** Restrictions that apply to an application or service principal object. */
        public ?string $restrictions = null,
        /** @var string[] Collection of applications and service principals to which the policy is applied. */
        public array $appliesTo = []
    ) {}
}
