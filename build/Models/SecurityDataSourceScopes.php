<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDataSourceScopes - Enum
 */
enum SecurityDataSourceScopes: string
{
    case NONE = 'none';
    case ALLTENANTMAILBOXES = 'allTenantMailboxes';
    case ALLTENANTSITES = 'allTenantSites';
    case ALLCASECUSTODIANS = 'allCaseCustodians';
    case ALLCASENONCUSTODIALDATASOURCES = 'allCaseNoncustodialDataSources';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
