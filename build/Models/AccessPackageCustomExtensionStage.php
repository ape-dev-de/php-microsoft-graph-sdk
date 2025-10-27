<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageCustomExtensionStage - Enum
 */
enum AccessPackageCustomExtensionStage: string
{
    case ASSIGNMENTREQUESTCREATED = 'assignmentRequestCreated';
    case ASSIGNMENTREQUESTAPPROVED = 'assignmentRequestApproved';
    case ASSIGNMENTREQUESTGRANTED = 'assignmentRequestGranted';
    case ASSIGNMENTREQUESTREMOVED = 'assignmentRequestRemoved';
    case ASSIGNMENTFOURTEENDAYSBEFOREEXPIRATION = 'assignmentFourteenDaysBeforeExpiration';
    case ASSIGNMENTONEDAYBEFOREEXPIRATION = 'assignmentOneDayBeforeExpiration';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
