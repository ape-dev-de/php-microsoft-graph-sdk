<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDefenderScanActionResult
 */
class WindowsDefenderScanActionResult
{
    /**
     * Windows Defender last scan result
     */
    private ?string $scanType;

    public function getScanType(): ?string
    {
        return $this->scanType;
    }

    public function setScanType(?string $scanType): self
    {
        $this->scanType = $scanType;
        return $this;
    }

}
