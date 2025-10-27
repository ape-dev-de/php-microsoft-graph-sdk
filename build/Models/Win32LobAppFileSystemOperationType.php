<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppFileSystemOperationType - Enum
 * A list of possible operations for rules used to make determinations about an application based on files or folders. Unless noted, can be used with either detection or requirement rules.
 */
enum Win32LobAppFileSystemOperationType: string
{
    case NOTCONFIGURED = 'notConfigured';
    case EXISTS = 'exists';
    case MODIFIEDDATE = 'modifiedDate';
    case CREATEDDATE = 'createdDate';
    case VERSION = 'version';
    case SIZEINMB = 'sizeInMB';
}
