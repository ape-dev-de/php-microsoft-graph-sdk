<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserPrint
 */
class UserPrint
{
    public function __construct(
        /** @var string[]  */
        public array $recentPrinterShares = []
    ) {}
}
