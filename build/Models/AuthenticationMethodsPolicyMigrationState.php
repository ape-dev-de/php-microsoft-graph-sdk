<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodsPolicyMigrationState - Enum
 */
enum AuthenticationMethodsPolicyMigrationState: string
{
    case PREMIGRATION = 'preMigration';
    case MIGRATIONINPROGRESS = 'migrationInProgress';
    case MIGRATIONCOMPLETE = 'migrationComplete';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
