<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppRegistryRuleOperationType - Enum
 * A list of possible operations for rules used to make determinations about an application based on registry keys or values. Unless noted, the values can be used with either detection or requirement rules.
 */
enum Win32LobAppRegistryRuleOperationType: string
{
    case NOTCONFIGURED = 'notConfigured';
    case EXISTS = 'exists';
    case DOESNOTEXIST = 'doesNotExist';
    case STRING = 'string';
    case INTEGER = 'integer';
    case VERSION = 'version';
}
