<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityExportOptions - Enum
 */
enum SecurityExportOptions: string
{
    case ORIGINALFILES = 'originalFiles';
    case TEXT = 'text';
    case PDFREPLACEMENT = 'pdfReplacement';
    case TAGS = 'tags';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case SPLITSOURCE = 'splitSource';
    case INCLUDEFOLDERANDPATH = 'includeFolderAndPath';
    case FRIENDLYNAME = 'friendlyName';
    case CONDENSEPATHS = 'condensePaths';
}
