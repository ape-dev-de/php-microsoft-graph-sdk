<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserPrint
 */
class UserPrint
{
    /**
     */
    private ?string $recentPrinterShares;

    public function getRecentPrinterShares(): ?string
    {
        return $this->recentPrinterShares;
    }

    public function setRecentPrinterShares(?string $recentPrinterShares): self
    {
        $this->recentPrinterShares = $recentPrinterShares;
        return $this;
    }

}
