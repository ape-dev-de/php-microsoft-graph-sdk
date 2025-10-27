<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TokenIssuerType - Enum
 */
enum TokenIssuerType: string
{
    case AZUREAD = 'AzureAD';
    case ADFEDERATIONSERVICES = 'ADFederationServices';
    case UNKNOWNFUTUREVALUE = 'UnknownFutureValue';
    case AZUREADBACKUPAUTH = 'AzureADBackupAuth';
    case ADFEDERATIONSERVICESMFAADAPTER = 'ADFederationServicesMFAAdapter';
    case NPSEXTENSION = 'NPSExtension';
}
