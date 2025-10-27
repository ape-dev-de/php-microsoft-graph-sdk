<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementExchangeAccessStateReason - Enum
 * Device Exchange Access State Reason.
 */
enum DeviceManagementExchangeAccessStateReason: string
{
    case NONE = 'none';
    case UNKNOWN = 'unknown';
    case EXCHANGEGLOBALRULE = 'exchangeGlobalRule';
    case EXCHANGEINDIVIDUALRULE = 'exchangeIndividualRule';
    case EXCHANGEDEVICERULE = 'exchangeDeviceRule';
    case EXCHANGEUPGRADE = 'exchangeUpgrade';
    case EXCHANGEMAILBOXPOLICY = 'exchangeMailboxPolicy';
    case OTHER = 'other';
    case COMPLIANT = 'compliant';
    case NOTCOMPLIANT = 'notCompliant';
    case NOTENROLLED = 'notEnrolled';
    case UNKNOWNLOCATION = 'unknownLocation';
    case MFAREQUIRED = 'mfaRequired';
    case AZUREADBLOCKDUETOACCESSPOLICY = 'azureADBlockDueToAccessPolicy';
    case COMPROMISEDPASSWORD = 'compromisedPassword';
    case DEVICENOTKNOWNWITHMANAGEDAPP = 'deviceNotKnownWithManagedApp';
}
