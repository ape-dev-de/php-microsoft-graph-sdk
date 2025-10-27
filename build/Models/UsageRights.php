<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UsageRights - Enum
 */
enum UsageRights: string
{
    case UNKNOWN = 'unknown';
    case DOCEDIT = 'docEdit';
    case EDIT = 'edit';
    case COMMENT = 'comment';
    case EXPORT = 'export';
    case FORWARD = 'forward';
    case OWNER = 'owner';
    case PRINT = 'print';
    case REPLY = 'reply';
    case REPLYALL = 'replyAll';
    case VIEW = 'view';
    case EXTRACT = 'extract';
    case VIEWRIGHTSDATA = 'viewRightsData';
    case EDITRIGHTSDATA = 'editRightsData';
    case OBJMODEL = 'objModel';
    case ACCESSDENIED = 'accessDenied';
    case USERDEFINEDPROTECTIONTYPENOTSUPPORTEDEXCEPTION = 'userDefinedProtectionTypeNotSupportedException';
    case ENCRYPTEDPROTECTIONTYPENOTSUPPORTEDEXCEPTION = 'encryptedProtectionTypeNotSupportedException';
    case PURVIEWCLAIMSCHALLENGENOTSUPPORTEDEXCEPTION = 'purviewClaimsChallengeNotSupportedException';
    case EXCEPTION = 'exception';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
