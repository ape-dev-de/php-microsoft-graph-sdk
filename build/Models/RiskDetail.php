<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskDetail - Enum
 */
enum RiskDetail: string
{
    case NONE = 'none';
    case ADMINGENERATEDTEMPORARYPASSWORD = 'adminGeneratedTemporaryPassword';
    case USERPERFORMEDSECUREDPASSWORDCHANGE = 'userPerformedSecuredPasswordChange';
    case USERPERFORMEDSECUREDPASSWORDRESET = 'userPerformedSecuredPasswordReset';
    case ADMINCONFIRMEDSIGNINSAFE = 'adminConfirmedSigninSafe';
    case AICONFIRMEDSIGNINSAFE = 'aiConfirmedSigninSafe';
    case USERPASSEDMFADRIVENBYRISKBASEDPOLICY = 'userPassedMFADrivenByRiskBasedPolicy';
    case ADMINDISMISSEDALLRISKFORUSER = 'adminDismissedAllRiskForUser';
    case ADMINCONFIRMEDSIGNINCOMPROMISED = 'adminConfirmedSigninCompromised';
    case HIDDEN = 'hidden';
    case ADMINCONFIRMEDUSERCOMPROMISED = 'adminConfirmedUserCompromised';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case M365DADMINDISMISSEDDETECTION = 'm365DAdminDismissedDetection';
    case ADMINCONFIRMEDSERVICEPRINCIPALCOMPROMISED = 'adminConfirmedServicePrincipalCompromised';
    case ADMINDISMISSEDALLRISKFORSERVICEPRINCIPAL = 'adminDismissedAllRiskForServicePrincipal';
    case USERCHANGEDPASSWORDONPREMISES = 'userChangedPasswordOnPremises';
    case ADMINDISMISSEDRISKFORSIGNIN = 'adminDismissedRiskForSignIn';
    case ADMINCONFIRMEDACCOUNTSAFE = 'adminConfirmedAccountSafe';
}
