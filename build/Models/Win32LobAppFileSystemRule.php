<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppFileSystemRule
 */
class Win32LobAppFileSystemRule
{
    /**  */
    public ?Win32LobAppRuleType $ruleType = null;

    /** A value indicating whether to expand environment variables in the 32-bit context on 64-bit systems. */
    public ?bool $check32BitOn64System = null;

    /** The file or folder comparison value. */
    public ?string $comparisonValue = null;

    /** The file or folder name to look up. */
    public ?string $fileOrFolderName = null;

    /**  */
    public ?Win32LobAppFileSystemOperationType $operationType = null;

    /**  */
    public ?Win32LobAppRuleOperator $operator = null;

    /** The file or folder path to look up. */
    public ?string $path = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['ruleType'])) {
            $this->ruleType = is_array($data['ruleType']) ? new Win32LobAppRuleType($data['ruleType']) : $data['ruleType'];
        }
        if (isset($data['check32BitOn64System'])) {
            $this->check32BitOn64System = $data['check32BitOn64System'];
        }
        if (isset($data['comparisonValue'])) {
            $this->comparisonValue = $data['comparisonValue'];
        }
        if (isset($data['fileOrFolderName'])) {
            $this->fileOrFolderName = $data['fileOrFolderName'];
        }
        if (isset($data['operationType'])) {
            $this->operationType = is_array($data['operationType']) ? new Win32LobAppFileSystemOperationType($data['operationType']) : $data['operationType'];
        }
        if (isset($data['operator'])) {
            $this->operator = is_array($data['operator']) ? new Win32LobAppRuleOperator($data['operator']) : $data['operator'];
        }
        if (isset($data['path'])) {
            $this->path = $data['path'];
        }
    }
}
