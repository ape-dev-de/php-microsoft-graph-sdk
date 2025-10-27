<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectDefinitionMetadata - Enum
 */
enum ObjectDefinitionMetadata: string
{
    case PROPERTYNAMEACCOUNTENABLED = 'PropertyNameAccountEnabled';
    case PROPERTYNAMESOFTDELETED = 'PropertyNameSoftDeleted';
    case ISSOFTDELETIONSUPPORTED = 'IsSoftDeletionSupported';
    case ISSYNCHRONIZEALLSUPPORTED = 'IsSynchronizeAllSupported';
    case CONNECTORDATASTORAGEREQUIRED = 'ConnectorDataStorageRequired';
    case EXTENSIONS = 'Extensions';
    case BASEOBJECTNAME = 'BaseObjectName';
}
