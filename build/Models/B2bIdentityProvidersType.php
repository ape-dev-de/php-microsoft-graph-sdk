<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * B2bIdentityProvidersType - Enum
 */
enum B2bIdentityProvidersType: string
{
    case AZUREACTIVEDIRECTORY = 'azureActiveDirectory';
    case EXTERNALFEDERATION = 'externalFederation';
    case SOCIALIDENTITYPROVIDERS = 'socialIdentityProviders';
    case EMAILONETIMEPASSCODE = 'emailOneTimePasscode';
    case MICROSOFTACCOUNT = 'microsoftAccount';
    case DEFAULTCONFIGUREDIDP = 'defaultConfiguredIdp';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
