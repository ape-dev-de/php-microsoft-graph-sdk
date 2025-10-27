<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionEnforcementLevel - Enum
 * Possible values for WIP Protection enforcement levels
 */
enum WindowsInformationProtectionEnforcementLevel: string
{
    case NOPROTECTION = 'noProtection';
    case ENCRYPTANDAUDITONLY = 'encryptAndAuditOnly';
    case ENCRYPTAUDITANDPROMPT = 'encryptAuditAndPrompt';
    case ENCRYPTAUDITANDBLOCK = 'encryptAuditAndBlock';
}
