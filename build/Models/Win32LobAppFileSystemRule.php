<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppFileSystemRule
 */
class Win32LobAppFileSystemRule
{
    public function __construct(
        /**  */
        public ?Win32LobAppRuleType $ruleType = null,
        /** A value indicating whether to expand environment variables in the 32-bit context on 64-bit systems. */
        public ?bool $check32BitOn64System = null,
        /** The file or folder comparison value. */
        public ?string $comparisonValue = null,
        /** The file or folder name to look up. */
        public ?string $fileOrFolderName = null,
        /**  */
        public ?Win32LobAppFileSystemOperationType $operationType = null,
        /**  */
        public ?Win32LobAppRuleOperator $operator = null,
        /** The file or folder path to look up. */
        public ?string $path = null
    ) {}
}
