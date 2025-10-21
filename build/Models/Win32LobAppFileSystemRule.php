<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppFileSystemRule
 */
class Win32LobAppFileSystemRule
{
    public function __construct(
        /** A value indicating whether to expand environment variables in the 32-bit context on 64-bit systems. */
        public ?bool $check32BitOn64System = null,
        /** The file or folder comparison value. */
        public ?string $comparisonValue = null,
        /** The file or folder name to look up. */
        public ?string $fileOrFolderName = null,
        /**  */
        public ?string $operationType = null,
        /**  */
        public ?string $operator = null,
        /** A complex type to store file or folder rule data for a Win32 LOB app. */
        public ?string $path = null
    ) {}
}
