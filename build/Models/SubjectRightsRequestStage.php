<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestStage - Enum
 */
enum SubjectRightsRequestStage: string
{
    case CONTENTRETRIEVAL = 'contentRetrieval';
    case CONTENTREVIEW = 'contentReview';
    case GENERATEREPORT = 'generateReport';
    case CONTENTDELETION = 'contentDeletion';
    case CASERESOLVED = 'caseResolved';
    case CONTENTESTIMATE = 'contentEstimate';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case APPROVAL = 'approval';
}
