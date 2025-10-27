<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppPowerShellScriptRuleOperationType - Enum
 * Contains all supported Powershell Script output detection type.
 */
enum Win32LobAppPowerShellScriptRuleOperationType: string
{
    case NOTCONFIGURED = 'notConfigured';
    case STRING = 'string';
    case DATETIME = 'dateTime';
    case INTEGER = 'integer';
    case FLOAT = 'float';
    case VERSION = 'version';
    case BOOLEAN = 'boolean';
}
