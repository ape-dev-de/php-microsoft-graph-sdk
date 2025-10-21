<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppReturnCode
 */
class Win32LobAppReturnCode
{
    public function __construct(
        /** Return code. */
        public ?float $returnCode = null,
        /**  */
        public ?Win32LobAppReturnCodeType $type = null
    ) {}
}
