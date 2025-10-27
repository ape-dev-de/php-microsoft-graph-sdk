<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AllowedTargetScope - Enum
 */
enum AllowedTargetScope: string
{
    case NOTSPECIFIED = 'notSpecified';
    case SPECIFICDIRECTORYUSERS = 'specificDirectoryUsers';
    case SPECIFICCONNECTEDORGANIZATIONUSERS = 'specificConnectedOrganizationUsers';
    case SPECIFICDIRECTORYSERVICEPRINCIPALS = 'specificDirectoryServicePrincipals';
    case ALLMEMBERUSERS = 'allMemberUsers';
    case ALLDIRECTORYUSERS = 'allDirectoryUsers';
    case ALLDIRECTORYSERVICEPRINCIPALS = 'allDirectoryServicePrincipals';
    case ALLCONFIGUREDCONNECTEDORGANIZATIONUSERS = 'allConfiguredConnectedOrganizationUsers';
    case ALLEXTERNALUSERS = 'allExternalUsers';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
