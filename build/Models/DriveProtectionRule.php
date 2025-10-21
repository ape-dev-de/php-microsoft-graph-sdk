<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveProtectionRule
 */
class DriveProtectionRule
{
    public function __construct(
        /** Contains a drive expression. For examples, see driveExpression examples. */
        public ?string $driveExpression = null
    ) {}
}
