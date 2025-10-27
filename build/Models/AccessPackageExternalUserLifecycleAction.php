<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageExternalUserLifecycleAction - Enum
 */
enum AccessPackageExternalUserLifecycleAction: string
{
    case NONE = 'none';
    case BLOCKSIGNIN = 'blockSignIn';
    case BLOCKSIGNINANDDELETE = 'blockSignInAndDelete';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
