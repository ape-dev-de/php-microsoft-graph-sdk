<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminRelationshipOperationType - Enum
 */
enum DelegatedAdminRelationshipOperationType: string
{
    case DELEGATEDADMINACCESSASSIGNMENTUPDATE = 'delegatedAdminAccessAssignmentUpdate';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case DELEGATEDADMINRELATIONSHIPUPDATE = 'delegatedAdminRelationshipUpdate';
}
