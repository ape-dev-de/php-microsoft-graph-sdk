<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserPrint
 */
class UserPrint
{
    /**
     * @var string[]
     */
    private array $recentPrinterShares = [];


    /**
     * @return string[]
     */
    public function getRecentPrinterShares(): array
    {
        return $this->recentPrinterShares;
    }

    /**
     * @param string[] $recentPrinterShares
     */
    public function setRecentPrinterShares(array $recentPrinterShares): self
    {
        $this->recentPrinterShares = $recentPrinterShares;
        return $this;
    }

}
