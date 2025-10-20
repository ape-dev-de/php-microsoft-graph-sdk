<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveProtectionRule
 */
class DriveProtectionRule
{
    /**
     * Contains a drive expression. For examples, see driveExpression examples.
     */
    private ?string $driveExpression;

    public function getDriveExpression(): ?string
    {
        return $this->driveExpression;
    }

    public function setDriveExpression(?string $driveExpression): self
    {
        $this->driveExpression = $driveExpression;
        return $this;
    }

}
