<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCaseAction - Enum
 */
enum SecurityCaseAction: string
{
    case CONTENTEXPORT = 'contentExport';
    case APPLYTAGS = 'applyTags';
    case CONVERTTOPDF = 'convertToPdf';
    case INDEX = 'index';
    case ESTIMATESTATISTICS = 'estimateStatistics';
    case ADDTOREVIEWSET = 'addToReviewSet';
    case HOLDUPDATE = 'holdUpdate';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case PURGEDATA = 'purgeData';
    case EXPORTREPORT = 'exportReport';
    case EXPORTRESULT = 'exportResult';
}
